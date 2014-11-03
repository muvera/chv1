<?php
class UploadConfig {

	public static function make(){


if(Input::file('image')==null)
{

}else{
				# Set Variables
				// 1. Get the user directory
				// 2. Access the File Field from the form
				// 3. Prepare a random name for the image  
				// 4. Put new_name on a session
				// 5. Get the original image Name 
				// 6. Put original_file_name on a session

				# Set System Border
				// 7. Get the border name.png
				// 8. Get the border id
				// 9. Move the file to it's new location
		
			$cat_id = Session::get('cat_id');
		// 1
			$user_dir = Session::get('user_dir');
		// 2 
			$image = Input::file('image');
		// 3
			$new_name = rand(700,0).'.jpg';
		// 4
			Session::put('new_name', $new_name);
		// 5
			$upload = $image->getClientOriginalName();
		// 6
			Session::put('upload', $upload);
		// 7
			$border_file = Input::get('border_file');
		// 8
			Session::put('border_file', $border_file);
		// 9
			$border_id = Input::get('border_id');
		// 10
			Session::put('border_id', $border_id);
		// 11
			$image->move(public_path('/uploads/'.$user_dir.'/'), $image->getClientOriginalName());

		}

	}




	public static function deleteDirectory($dir) { 
        if (!file_exists($dir)) { return true; }
        if (!is_dir($dir) || is_link($dir)) {
            return unlink($dir);
        }
        foreach (scandir($dir) as $item) { 
            if ($item == '.' || $item == '..') { continue; }
            if (!UploadConfig::deleteDirectory($dir . "/" . $item, false)) { 
                chmod($dir . "/" . $item, 0777); 
                if (!UploadConfig::deleteDirectory($dir . "/" . $item, false)) return false; 
            }; 
        } 
        return rmdir($dir); 
    }





}