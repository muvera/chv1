<?php

use cakehollywood\Forms\CreateAddressForm;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class AddressesController extends \BaseController {

	protected $createaddressForm;

	function __construct(CreateAddressForm $createaddressForm)
	{
		$this->createaddressForm = $createaddressForm;

		//$this->beforeFilter('currentUser', ['only'=> ['edit', 'update', 'create']]);
	}

	/**
	 * Display a listing of the resource.
	 * GET /addresses
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /addresses/create
	 *
	 * @return Response
	 */
	public function create($username)
	{

		$user = User::whereUsername($username)->firstOrFail();

		return View::make('addresses.create')
				->withUser($user);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /addresses
	 *
	 * @return Response
	 */
	public function store($username)
	{
		$user = User::whereUsername($username)->firstOrfail();
		$address = new Address;

		$input = Input::get();
		$address->company = $input['company'];
		$address->name = $input['name'];
		$address->last = $input['last'];
		$address->phone = $input['phone'];
		$address->address = $input['address'];
		$address->apt = $input['apt'];
		$address->city = $input['city'];
		$address->zip = $input['zip'];
		$address->state = $input['state'];
		$address->country = $input['country'];
		
		$user->address()->save($address);


		return Redirect::to('buy');


	}

	/**
	 * Display the specified resource.
	 * GET /addresses/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($username)
	{
		dd('username');
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /addresses/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($username)
	{
		$user = User::whereUsername($username)->firstOrfail();

		return View::make('addresses.edit')
				->with('user', $user);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /addresses/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		
		$address = Address::findOrFail($id);


		$input = Input::get();
		$address->company = $input['company'];
		$address->name = $input['name'];
		$address->last = $input['last'];
		$address->phone = $input['phone'];
		$address->address = $input['address'];
		$address->apt = $input['apt'];
		$address->city = $input['city'];
		$address->zip = $input['zip'];
		$address->state = $input['state'];
		$address->country = $input['country'];
		
		$address->save();

		return Redirect::back();


	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /addresses/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}