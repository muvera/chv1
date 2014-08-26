<?php

class Size extends \Eloquent {
	protected $fillable = [];

	public function category()
	{
		return $this->hasOne('Category');
	}

	public function decorations()
	{
		return $this->belongsToMany('Decoration');
	}


}