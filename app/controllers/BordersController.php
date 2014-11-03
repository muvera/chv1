<?php

class BordersController extends \BaseController {

	public function index()
	{
	# PARENT ALL CATEGORIES
		$categories = Category::get();

		return View::make('core.borders.all_categories')
			->with('categories', $categories);
	}

	# CHILD CATEGORIES
	public function shape($shape)
	{
		$id = Session::get('product');
		$product = Product::findOrFail($id);
		$categories = Category::where('shape', '=', $shape)->get();
		return View::make('core.borders.categories')
			->with('product', $product)
			->with('categories', $categories);

	}

	# GRAND CHILD CATEGORY ALL ITEMS
	public function category($shape, $cat_id)
	{
		$id = Session::get('product');
		$product = Product::findOrFail($id);
		
		$category = Category::where('id', '=', $cat_id)->first();
		$borders = Border::where('cat_id', '=', $cat_id)->get();

		return View::make('core.borders.category')
					->with('product', $product)
					->with('shape', $shape)
					->with('cat_id', $cat_id)
					->with('category', $category)
					->with('borders', $borders);
	}

	# CATEGORY ITEM
	public function border($shape, $cat_id, $border_id)
	{
		$id = Session::get('product');
		$product = Product::findOrFail($id);

		$category = Category::where('id', '=', $cat_id)->first();
		$border = Border::where('id', '=', $border_id)->first();

		return View::make('core.borders.border')
					->with('product', $product)
					->with('cat_id', $cat_id)
					->with('shape', $shape)
					->with('category', $category)
					->with('border', $border);
	}

	# PREVIEW THE BORDER
	public function preview($shape, $cat_id, $border_id)
	{

		#process
		// Get Border ID
		// Get Image FILE
		// Process Image
		// Save Image Session
		// Make Thumb
		// Save Thumb Session

		$id = Session::get('product');
		$product = Product::findOrFail($id);


		#SHOW ALL CATEGORY ITEMS WITH PREVIEW
		$category = Category::where('id', '=', $cat_id)->first();
		$borders = Border::where('cat_id', '=', $cat_id)->get();

		$folder = Session::get('dirname');
		$filename = Session::get('filename');

		$path = public_path().'/uploads/'.$folder.'/';
		$originalimg = 'original_'.$filename.'.jpg';

			// 3. REST THE IMAGE
			Image::make($path.$originalimg)
					->resize(1000, null, function ($constraint) {$constraint->aspectRatio();})
					->save($path.'/resized_'.$filename.'.jpg');
				

			// 4. APPLY THE BORDER
			Image::canvas(1000, 750,'#ffffff')
					->insert($path.'/resized_'.$filename.'.jpg', 'center')
					->insert(public_path().'/assets/images/' .$cat_id.'/'. $border_id . '.png')
					->save($path .'/'.$shape.'_'.$filename.'.jpg')
					->resize(350, 263, function ($constraint) {$constraint->aspectRatio();})
					->save($path. '/thumb_'.$shape.'_'.$filename.'.jpg');


					return View::make('core.borders.preview')
					->with('product', $product)
					->with('shape', $shape)
					->with('cat_id', $cat_id)
					->with('category', $category)
					->with('borders', $borders);

	}

	# DELETE SESSIONS
		public function delete($id)
	{
			#flush all sessions exept shape
			Session::flush('filename');
			Session::flush('dirname');
			Session::flush('imagedata');
			Session::flush('thumbdata');
			return Redirect::route('product', $id);
	}

	# Create

	public function create(){

		$sizes = Size::get();
		$categories = Category::get();
		return View::make('borders.create')
				->with('sizes', $sizes)
				->with('categories', $categories);
		
	}

# Show

	public function show($id){
		$border = Border::findOrFail($id);
		$price = Size::where('id', '=', $border->size_id)->first();
				
		// New session for current product
		ProductSessions::put($id, $border->cat_id, $border->size_id, $border->make, $border->file);
		// Check upload, generate image, if no upload than leave as is. 
		ProductImages::check();

				return View::make('borders.show')
					->with('price', $price)
					->with('border', $border);
	}

#edit
		public function edit($id){

		$border = Border::findOrFail($id);

		return View::make('borders.edit')
				->with('border', $border);
			}

#destroy
		public function destroy($id){

		$border = Border::findOrFail($id);
		$category = $border->cat_id;
		$border->delete();

		return Redirect::back();
		}


#update
		public function update($id){

		$input = Input::get();
		$border = Border::findOrFail($id);
		$border->name = $input['name'];
		$border->description = $input['description'];
		$border->file = $input['file'];
		$border->save();

		return Redirect::to('/borders/'. $id );

		}




	



}