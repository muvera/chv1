<?php
class Sample{

	public static function make(){

$cat_id = Session::get('cat_id');
$border_id = Session::get('border_id');
$user_dir = Session::get('user_dir');
$new_name = Session::get('new_name');

// 1
$i = public_path('uploads/'. $user_dir . '/' . $cat_id . '/'. $border_id . '/thumb_'. $new_name);


$make = Session::get('border_make');
$c = public_path('assets/cakes/'. $cat_id . '/'.$make.'.png');

// 2
Image::make($i)
	->rotate(90)
	->save($i);

// 3
Perspective::make($i);

// 4
Image::make($i)
	->rotate(-90)
	->save($i);
// quarter sheet cordinates
//71, 21
Image::canvas(400,251,'#ffffff')
	->insert($i,'center')
	->insert($c,'center')
	->save($i);

	}






}






