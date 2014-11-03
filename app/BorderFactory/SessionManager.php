<?php
	
	Class SessionManager{

			// This takes care of the user directory
			// USE Session::get('user_dir') to get the folder name of the user


		public static function makeFolder(){

			// If there is no user directory than run the function
			if(!Session::get('user_dir')){
			// Generate a random number
			$foldername = rand(9999999,0);
			// Make a directory on the uploads folder
			$dir = mkdir(public_path('/uploads/'. $foldername));
			// Add a folder session
			Session::put('user_dir', $foldername);
			}

			$folder_full = public_path('/uploads/' . Session::get('user_dir') . '/' . Session::get('cat_id') . '/' . Session::get('border_id'));
			if (!is_dir($folder_full)) mkdir($folder_full, 0777, true);



		}

		public static function makeSessions(){

					$new_name = Session::get('new_name');
	
					// Generated image
					Session::put('process', $new_name);
					// thumbnail
					Session::put('thumbnail', 'thumb_' . $new_name);
					// Size Id for price and size
					// Session::put('size_id', Input::get('size_id'));
					// // Category Id
					// Session::put('cat_id', Input::get('cat_id'));

		}














	}