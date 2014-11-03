<?php

class Paths {

	static public function user_dir(){

	$user_dir = Session::get('user_dir');

	return $user_dir;
	}



	static public function border(){

	$borders = public_path('borders/'. Session::get('cat_id') . '/' . Session::get('border_file'));

	return $borders;

	}


# Original Uploaded Image
	static public function rootImage(){
	$user_dir = Session::get('user_dir');
	$cat_id = Session::get('cat_id');
	$border_id = Session::get('border_id');
	$new_name = Session::get('new_name');
	$upload = Session::get('upload');
	$rootImage = public_path('uploads/'. $user_dir. '/' . $upload);

		return $rootImage;
	}

	static public function image(){

	$user_dir = Session::get('user_dir');
	$cat_id = Session::get('cat_id');
	$border_id = Session::get('border_id');
	$new_name = Session::get('new_name');
	$image = public_path('uploads/'. $user_dir .'/'. $cat_id . '/'. $border_id . '/'. $new_name);



	return $image;
	}

	static public function resized(){

	$user_dir = Session::get('user_dir');
	$cat_id = Session::get('cat_id');
	$border_id = Session::get('border_id');
	$new_name = Session::get('new_name');
	$image = public_path('uploads/'. $user_dir . '/resized_'. $new_name);

	return $image;
	}


	static public function thumb(){
	$user_dir = Session::get('user_dir');
	$cat_id = Session::get('cat_id');
	$border_id = Session::get('border_id');
	$new_name = Session::get('new_name');
	$thumb = public_path('uploads/'. $user_dir . '/' . $cat_id . '/' . $border_id . '/thumb_'. $new_name);

	return $thumb;
	}

# Mini thumbnail of orignial upload
	static public function mini(){
	$user_dir = Session::get('user_dir');
	$cat_id = Session::get('cat_id');
	$border_id = Session::get('border_id');
	$new_name = Session::get('new_name');
	$mini = public_path('uploads/'. $user_dir . '/' . $cat_id . '/' . $border_id . '/mini_'. $new_name);

	return $mini;
	}




}