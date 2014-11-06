<?php

class TutorialsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /tutorials
	 *
	 * @return Response
	 */
	public function index()
	{
		//
				$tutorials = Tutorial::get();
				return View::make('tutorials.index')
						->with('tutorials',$tutorials );
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /tutorials/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /tutorials
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /tutorials/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
			$tutorial	= Tutorial::findOrFail($id);
		
				return View::make('tutorials.show')
					->with('tutorial',$tutorial);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /tutorials/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//

			$tutorial = Tutorial::findOrFail($id);
		
				return View::make('tutorials.edit')
						->with('tutorial',$tutorial );
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /tutorials/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
			$input = Input::get();
			$tutorial = Tutorial::findOrFail($id);
			$tutorial->title = $input['title'];
			$tutorial->body = $input['body'];
			$tutorial->st1 = $input['st1'];
			$tutorial->st2 = $input['st2'];
			$tutorial->st3 = $input['st3'];
			$tutorial->st4 = $input['st4'];
			$tutorial->st5 = $input['st5'];
			$tutorial->save();
		
				return Redirect::to('/all_tutorials');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /tutorials/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}