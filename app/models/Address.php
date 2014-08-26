<?php

class Address extends \Eloquent {
		protected $fillable = [
	'address', 'apt', 'city', 'zip', 'state', 'country'
	];

		public function user()
	{

			return $this->belongsTo('User');

	}
}


