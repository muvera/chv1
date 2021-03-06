<?php

use cakehollywood\Forms\RegistrationForm;


class RegistrationController extends \BaseController {

	/**
	 *
	 * @var RegistrationForm
	 */
	private $registrationForm;

	function __construct(RegistrationForm $registrationForm)
{
    $this->registrationForm = $registrationForm;
}



	/**
	 * Display a listing of the resource.
	 * GET /registration
	 *
	 * @return Response
	 */
	public function index()
	{
		dd('ok');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /registration/create
	 *
	 * @return Response
	 */
	public function create()
	{

		if(Auth::check()) return Redirect::home();

		return View::make('registration.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /registration
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::only('username', 'email', 'password', 'password_confirmation');

		$this->registrationForm->validate($input);
		
		$user = User::create($input);

		$user->assignRole(1);

		Auth::login($user);


			
			# USE MANDRILL to send registration notice
			// Mail::send('emails.welcome', [], function($message)
	
			// {
			// $email = Auth::user()->email;
			// $message->to($email)->subject('Welcome to Cake Hollywood');
	
			// });

		return Redirect::back();
	}

	/**
	 * Display the specified resource.
	 * GET /registration/{id}
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
	 * GET /registration/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		dd('ok');
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /registration/{id}
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
	 * DELETE /registration/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}