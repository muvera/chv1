<?php

class TrendsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /trends
	 *
	 * @return Response
	 */
	public function index()
	{
		//

				$trends = Trend::get();
				return View::make('trends.index')
						->with('trends',$trends );

	}

	/**
	 * Show the form for creating a new resource.
	 * GET /trends/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /trends
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /trends/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//

			$trend = Trend::findOrFail($id);
		
				return View::make('trends.show')
					->with('trend',$trend );
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /trends/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//

			$trend = Trend::findOrFail($id);
		
				return View::make('trends.edit')
					->with('trend',$trend );
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /trends/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//

			$input = Input::get();
			$trend = Trend::findOrFail($id);
			$trend->title = $input['title'];
			$trend->body = $input['body'];
			$trend->save();
		
				return Redirect::to('/analytics');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /trends/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}