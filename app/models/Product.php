<?php

class Product extends \Eloquent {
	protected $fillable = ['id', 'created_at', 'updated_at'];

	public function categories()
	{

		return $this->belongsToMany('Category');
	}

}

