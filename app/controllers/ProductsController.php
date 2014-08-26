<?php

class ProductsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /products
	 *
	 * @return Response
	 */
	public function index()
	{
		$products = Product::get();

		return View::make('products.index')
		->with('title', 'All Products')
		->with('products', $products);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /products/create
	 *
	 * @return Response
	 */
	public function create()
	{

		$uploads = Upload::get();
		$sizes = Size::get();
		return View::make('products.create')
					->with('title', 'Create New Products')
					->with('uploads', $uploads)
					->with('sizes', $sizes);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /products
	 *
	 * @return Response
	 */
	public function store()
	{

		$product = new Product;
		$product->name = Input::get('name');
		$product->description = Input::get('description');
		$product->dynamic = Input::get('dynamic');
		$product->border = Input::get('border');
		$product->uploads = Input::get('uploads');
		$product->sizeid = Input::get('dsize');
		$product->category = '4';
		$product->tags = '4';
		$product->file = '4';
		$product->order = '0';
		$product->save();

		
		return Redirect::to('/products/');
	}

	/**
	 * Display the specified resource.
	 * GET /products/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		

		$product = Product::findOrFail($id);

		return View::make('products.show')
			->with('product',$product);

	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /products/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$product = Product::findOrFail($id);

		return View::make('core.edit.round')
				->with('product', $product);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /products/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{

		$product = Product::findOrFail($id);
		$product->name = Input::get('name');
		$product->description = Input::get('description');
		$product->uploads = Input::get('uploads');
		$product->tags = Input::get('tags');
		$product->file = Input::get('file');

		$product->save();

		return Redirect::to('/products/'.$id);

	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /products/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$product = Product::findOrFail($id);
		$product->delete();
		return Redirect::to('/products/');
	}


		/**
	 * Attach to Pivot Table
	 */
	public function attach($id)
	{
		// From Pivot Table
		$product = Product::findOrFail($id);
		$categories = Category::get();
		return View::make('products.attach')
				->with('title', 'Decoration Page')
				->with('product', $product)
				->with('categories',$categories);
	}

	 /**
	 * Attach to Pivot Table
	 */
	public function attachcategory($id, $catid)
	{
		// Get Product And Attache to Category_Product Pivot Table
		$product = Product::findOrFail($id);
		$product->categories()->attach($catid);
		return Redirect::to('/products/'.$id);
		

	}

	 /**
	 * Detach to Pivot Table
	 */
	public function detachcategory($id, $catid)
	{
		// Find product
		$product = Product::findOrFail($id);
		// Get the pivot category_product and add the category id to the product id
		$product->categories()->detach($catid);
		// redirect to page
		return Redirect::to('/products/'.$id);
		

	}



}