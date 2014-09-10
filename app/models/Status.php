<?php

class Status extends \Eloquent {
	protected $table = 'statuses';
	protected $fillable = ['name'];

		public function orders()
	{
	return 	$this->belongsToMany('Order')->withTimeStamps();
	}
}