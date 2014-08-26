<?php

class SizesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /sizes
	 *
	 * @return Response
	 */
	public function index()
	{
		$sizes = Size::get();

		return View::make('sizes.index')
		->with('title', 'All Sizes')
		->with('sizes', $sizes);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /sizes/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('sizes.create')
				->with('title', 'Create New Size');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /sizes
	 *
	 * @return Response
	 */
	public function store()
	{	
		// Get form Input
		$input = Input::get();
		// Create New Object record
		$size = New Size;
		$size->dshape = $input['dshape'];
		$size->cat = $input['cat'];
		$size->name = $input['name'];
		$size->description = $input['description'];
		$size->width = $input['width'];
		$size->height = $input['height'];
		$size->base_price = $input['base_price'];
		$size->file = $input['file'];
		// Save Object
		$size->save();
		// Get Object
		$size = DB::table('sizes')->orderby('created_at', 'desc')->first();
		// Send it to the show view
		return Redirect::to('/sizes/'.$size->id);

	}

	/**
	 * Display the specified resource.
	 * GET /sizes/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$size = Size::findOrFail($id);
		// Get from Pivot
		$decorations = Size::findOrFail($id)->decorations;

		return View::make('sizes.show')
				->with('size', $size)
				->with('title', 'Show Sizes')
				->with('decorations',$decorations);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /sizes/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$size = Size::findOrFail($id);
			return View::make('sizes.edit')
				->with('title', 'Edit Size')
				->with('size', $size);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /sizes/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		// Get form data
		$input = Input::get();
		$size = Size::findOrFail($id);
		$size->dshape = $input['dshape'];
		$size->cat = $input['cat'];
		$size->name = $input['name'];
		$size->description = $input['description'];
		$size->width = $input['width'];
		$size->height = $input['height'];
		$size->base_price = $input['base_price'];
		$size->file = $input['file'];
		// Save Object
		$size->save();
		// Send it to the show view
		return Redirect::to('/sizes/'.$id);
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /sizes/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$size = Size::findOrFail($id);
		$size->delete();
		return Redirect::to('/sizes/');
	}



		/**
	 * Attach to Pivot Table
	 */
	public function attach($id)
	{


		// Get from Pivot
		$size = Size::findOrFail($id);
		$decorations = Decoration::get();

		return View::make('sizes.attach')
				->with('size', $size)
				->with('title', 'Show Sizes')
				->with('decorations',$decorations);
	}

	 /**
	 * Attach to Pivot Table
	 */
	public function attachdecoration($id, $decoid)
	{
		// Get Product And Attache to Category_Product Pivot Table
		$size = Size::findOrFail($id);
		$size->decorations()->attach($decoid);
		return Redirect::to('/sizes/'.$id);
		

	}

	 /**
	 * Detach to Pivot Table
	 */
	public function detachdecoration($id, $decoid)
	{
		// Find product
		$size = Size::findOrFail($id);
		// Get the pivot category_product and add the category id to the product id
		$size->decorations()->detach($decoid);
		// redirect to page
		return Redirect::to('/sizes/'.$id);
		

	}

}