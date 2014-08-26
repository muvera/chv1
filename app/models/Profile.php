<?php

class Profile extends Eloquent {

	protected $fillable = [
	'address1', 'address2', 'city', 'zip', 'state'
	];


	public function user()
	{

			return $this->belongsTo('User');

	}









}