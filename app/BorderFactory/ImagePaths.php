<?php

class ImagePaths {
	

# Original Uploaded Image
	static public function rootImage(){
	$user_dir = Session::get('user_dir');
	$cat_id = Session::get('cat_id');
	$border_id = Session::get('border_id');
	$new_name = Session::get('new_name');
	$upload = Session::get('upload');
	$rootImage = $user_dir. '/'. $upload;

		return $rootImage;

	}
# Resized Image from Original
	static public function resized(){

	$user_dir = Session::get('user_dir');
	$cat_id = Session::get('cat_id');
	$border_id = Session::get('border_id');
	$new_name = Session::get('new_name');

		return $user_dir. '/'. $cat_id.'/'.$border_id. '/resized_'. $new_name;
		
	}


# Product Sample Image
	static public function image(){
	$user_dir = Session::get('user_dir');
	$cat_id = Session::get('cat_id');
	$border_id = Session::get('border_id');
	$new_name = Session::get('new_name');

		return $user_dir. '/'. $cat_id.'/'.$border_id. '/'. $new_name;

	}

# Product Sample Cake Image
		static public function cakeSample(){
	$user_dir = Session::get('user_dir');
	$cat_id = Session::get('cat_id');
	$border_id = Session::get('border_id');
	$new_name = Session::get('new_name');

		return $user_dir. '/'. $cat_id.'/'.$border_id. '/thumb_'. $new_name;

	}


# Original Image mini
		static public function mini(){
	$user_dir = Session::get('user_dir');
	$cat_id = Session::get('cat_id');
	$border_id = Session::get('border_id');
	$new_name = Session::get('new_name');

		return $user_dir. '/'. $cat_id.'/'.$border_id. '/mini_'. $new_name;

	}







}