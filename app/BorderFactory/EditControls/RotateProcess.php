<?php
class RotateProcess {

	public static function Rotate()
	{	

		// image name
		$image = Session::get('process');
		
		//Session Folder Name
		$user_dir = Session::get('user_dir');
		
		// resized image path
		$resized_image = public_path('/uploads/'. $user_dir . '/' . 'resized_'.$image);
		
		// Get size
		$width = Image::make($resized_image)->width();

		$increase = $width + 50;

		// Look for Image
		Image::make($resized_image)
			->rotate(-90)
			->save($resized_image);
		
		// LAYER THE IMAGE
		$border_id = Session::get('border_id');
		// Add border Id
		$border_file = Session::get('border_file');
		// Orginal File
		$upload = Session::get('upload');
		// Image Name
		$process = Session::get('process');
		//Session Folder Name
		$user_dir = Session::get('user_dir');
		// User Path
		$user_path = public_path('/uploads/'.$user_dir.'/');
		// Border Path
		$border_path = public_path('/borders/'. $border_file);
		
		// Start the Layer
		$canvas = Image::canvas(1000, 750,'#ffffff');
		$canvas->insert($resized_image,'center',0,0);

		//uses sysimg for files on the system
		$canvas->insert($border_path, 'center',0,0);
		$canvas->save($user_path.'/'.$process);

	}
}