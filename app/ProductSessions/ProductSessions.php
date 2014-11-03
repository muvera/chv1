<?php
Class ProductSessions{
	
	static public function put($border_id, $cat_id, $size_id, $border_make, $border_file){
  				
  				// product id
  				Session::put('border_id', $border_id);
  				// category Id
  				Session::put('cat_id', $cat_id);
  				// Size Id
				Session::put('size_id', $size_id);
				// How many images on canvas
				Session::put('border_make', $border_make);
				// Border File
				Session::put('border_file', $border_file);


	}


	static public function forget(){

				// Session::forget('border_id');
				// Session::forget('cat_id');
				// Session::forget('size_id');
				// Session::forget('border_make');
				// Session::forget('border_file');
				// Session::forget('process');




	}




}