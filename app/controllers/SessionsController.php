<?php

use cakehollywood\Forms\LoginForm;

class SessionsController extends \BaseController {

	protected $loginForm;

	function __construct(LoginForm $loginForm)
{
    $this->loginForm = $loginForm;
}


	public function create()
	{
		return View::make('sessions.create')
					->with('title', 'LogIn');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /sessions
	 *
	 * @return Response
	 */
	public function store()
	{

		$this->loginForm->validate($input = Input::only('email','password'));

		if(Auth::attempt($input)) 
		{
			return Redirect::intended('/buy');
		}



		return Redirect::back()->withInput()->withFlashMessage('Invalid credentials provided');

		// $input = Input::all();
		// $attempt = Auth::attempt([
		// 	'email'=>$input['email'],
		// 	'password'=>$input['password']
		// 	]);
		// if($attempt){
		// return Redirect::intended('/profile')->with('flash_message', 'You have been logged in!');

		// }
		// dd('problem');

	}


	/**
	 * Remove the specified resource from storage.
	 * DELETE /sessions/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy()
	{
		Auth::logout();
		return Redirect::home();
	}

}