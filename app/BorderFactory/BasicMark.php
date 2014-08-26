<?php
class BasicMark {


		public static function beta($id, $size, $border, $folderName, $fileName, $sysimg)
	{
		// Look for the image dimentions
		$s = Size::where('id', '=', $size)->first();
		// Home Image
		$homeimg = public_path().'/assets/factory/borders/'.$size.'/'.$sysimg;
		// Uploaded Image
		$uploadimg = public_path().'/uploads/'.$folderName.'/'.$fileName;
		// White Mask
		$whitemask = public_path().'/assets/factory/borders/'.$size.'/whitemask.png';
		// Watermark Starts
		// Get uploaded image and resize
		$resize = Image::make($uploadimg);
		$resize->resize($s->width,$s->height,true);
		$resize->save(public_path().'/uploads/'.$folderName.'/resized.jpg');
	

		// Make Canvas Dimentions to Write Image Design
		$canvas = Image::canvas(1000, 750,'#ffffff');
		$canvas->insert(public_path().'/uploads/'.$folderName.'/resized.jpg', 0,0,'center');
		$canvas->insert($whitemask, 0,0,'center');
		$canvas->insert($homeimg, 0,0,'center');
		$canvas->save(public_path().'/uploads/'.$folderName.'/'.$id.$size.$border.'.jpg');
		$canvas->resize(400,300,true);
		$canvas->save(public_path().'/uploads/'.$folderName.'/s_'.$id.$size.$border.'.jpg');

	}



		public static function makesample($id, $catid, $sizeid,  $dfile, $folderName, $fileName)
	{
		// Find size for dimentions
		$s = Size::where('id', '=', $sizeid)->first();

		// Home Border Image
		$homeimg = public_path().'/assets/factory/borders/'.$catid.'/'.$dfile;
		// Uploaded Image
		$uploadimg = public_path().'/uploads/'.$folderName.'/'.$fileName;
		// White Mask
		$whitemask = public_path().'/assets/factory/mask/'.$s->mask;
		

		// Get uploaded image and resize
		$resize = Image::make($uploadimg);
		$resize->resize($s->width, $s->height, function ($constraint) {
    	$constraint->aspectRatio();
		});
		$resize->save(public_path().'/uploads/'.$folderName.'/resized.jpg');
	

		// Generate a file name for the uploadName session
		$uploadName      = str_random(12);
		// Make Canvas Dimentions to Write Image Design
		$canvas = Image::canvas(1000, 750,'#ffffff');
		$canvas->insert(public_path().'/uploads/'.$folderName.'/resized.jpg', 'center',0,0);
		$canvas->insert($whitemask, 'center',0,0);
		$canvas->insert($homeimg, 'center',0,0);
		$canvas->save(public_path().'/uploads/'.$folderName.'/'.$uploadName.'.jpg');
		$canvas->resize($s->width, null, function ($constraint) {
    			$constraint->aspectRatio();
    			});
		$canvas->save(public_path().'/uploads/'.$folderName.'/s_'.$uploadName.'.jpg');

		// Push the file name to the Session Array fileName
		$sessionName = Session::get('folderName');
		// Make a new session for the foldername xyz
		Session::push($sessionName, $uploadName.'.jpg');

	}





}