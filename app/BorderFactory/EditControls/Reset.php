<?php
class Reset {

	public static function action($id,$catid,$sysimg,$cid)
	{	

		// Session Folder Name
		$folderName = Session::get('folderName');
		// Get upload session name
		$uploadimgs = Session::get($folderName);
		// Get the last uploaded image name
		$img = end($uploadimgs);
		// Get upload filename
		$fileName = Session::get('fileName');

		// Look for the decoration details
		$decoration = Decoration::where('id','=', $id)->first();
		$sizeid = $decoration->dsize;

		// Find size for dimentions
		$s = Size::where('id', '=', $sizeid)->first();

		// Home Border Image
		$homeimg = public_path().'/assets/factory/borders/'.$catid.'/'.$sysimg;
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


		// Delete Dummy File
		Process::DeleteDummy($folderName);

		// // LAYER THE IMAGE
		$canvas = Image::canvas(1000, 750,'#ffffff');
		$canvas->insert(Paths::UploadPath($folderName).'/resized.jpg','center',0,0);
		$canvas->insert(Paths::BorderPath($catid).'/'.$sysimg.'.png','center',0,0);
		$canvas->save(Paths::UploadPath($folderName).'/'.$img);
		$canvas->resize(400,300, function ($constraint) {
    	$constraint->aspectRatio();
		});
		$canvas->save(Paths::UploadPath($folderName).'/s_'.$img);


	}
}