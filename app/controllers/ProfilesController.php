<?php

use cakehollywood\Forms\ProfileForm;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ProfilesController extends \BaseController {

	protected $profileForm;

	function __construct(ProfileForm $profileForm)
	{
		$this->profileForm = $profileForm;

		$this->beforeFilter('currentUser', ['only'=> ['edit', 'update', 'create']]);
	}


	/**
	 * Display the specified resource.
	 * GET /profiles/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($username)
	{
		try
		{
			$user = User::with('profile')->whereUsername($username)->firstOrFail();
			//dd($user->toArray());
		}

		catch(ModelNotFoundException $e)
		{
			return Redirect::home();
		}

		return View::make('profiles.show')
				->withUser($user);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /profiles/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($username)

	{
		$user = User::whereUsername($username)->firstOrfail();
		return View::make('profiles.edit')->withUser($user);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /profiles/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($username)
	{

		$user = User::whereUsername($username)->firstOrfail();


		$input = Input::only('address1', 'address2', 'city', 'zip', 'state');

		$this->profileForm->validate($input);

		$user->profile->fill($input)->save();

		return Redirect::route('profile.edit', $user->username);
		
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /profiles/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

		public function store($username)
	{
		$user = User::whereUsername($username)->firstOrfail();
		$profile = new Profile;

		$input = Input::get();
		$profile->address1 = $input['address1'];
		$profile->address2 = $input['address2'];
		$profile->city = $input['city'];
		$profile->zip = $input['zip'];
		$profile->state = $input['state'];
		
		$user->profile()->save($profile);

		return Redirect::route('profile.edit', $user->username);
	}

	public function create()
	{

dd('ok');

	}

}