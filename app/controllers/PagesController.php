<?php

class PagesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /pages
	 *
	 * @return Response
	 */
	public function home()
	{
		
		$products = Product::get();
		return View::make('pages.index')
				->with('products', $products)
				->with('title', 'Edible Photo Printing & Design')
				->with('meta_description', 'Customize Edible Images online for free, simply upload a photo and choose from hundreds of frames and face masks,  Edible cupcake images & Edible photos for cakes');

	}


	public function about()
	{
		

		$products = Product::get();
		return View::make('pages.about_us');
				
	}

	public function contact()
	{
		

		$products = Product::get();
		return View::make('pages.contact');
				
	}

	public function policy()
	{
		

		$products = Product::get();
		return View::make('pages.policy');
				
	}


	public function ediblesoft()
	{
		

		$products = Product::get();
		return View::make('pages.ediblesoft');
				
	}
	





		public function core()
	{
		return View::make('core.index');
	}



	/**
	 * Show the form for creating a new resource.
	 * GET /pages/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /pages
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /pages/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /pages/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /pages/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /pages/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


		public function halloween()
	{
		

		return View::make('pages.halloween_2014')
				->with('title', '2014 Halloween Scary Movie Cakes - Instructions')
				->with('meta_description', 'Customize Edible Halloween Images online for free, simply upload a photo and choose your favorite horror theme or horror face masks');

	}


}