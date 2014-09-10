<?php

class Order extends \Eloquent {
	protected $fillable = [];
	protected $table = 'orders';

	public function status()

	{
	return 	$this->belongsToMany('Status')->withTimeStamps();
	}


	public function hasStatus($name)
	{

		foreach($this->status as $stat)
		{
			if($stat->name == $stat) return true;
		}
		return false;
	}

	public function assignStatus($status)
	{
		return $this->status()->attach($status);
	}

	public function removeStatus($status)
	{
		return $this->status()->detach($status);
	}



}