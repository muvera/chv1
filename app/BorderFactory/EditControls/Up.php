<?php
class Up {

	public static function action($id,$sizeid,$sysimg,$cid)
	{	

		// Session Folder Name
		$folderName = Session::get('folderName');
		// Get upload session name
		$uploadimgs = Session::get($folderName);
		// Get the last uploaded image name
		$img = end($uploadimgs);
		
		// MAKE DUMMY VALUE if it does not exists.
		Process::DummyCheck($folderName);
		
		// Get Dummy Dimentions Values
		$dx = Process::GetDummyWidth($folderName) + 10;
		$dy = Process::GetDummyHeigh($folderName) + 10;
		// Resize Dummy
		Process::ResizeDummy($folderName, $dx, $dy);

		// GET New Dummy Dimention Values to Apply on image
		$dx = Process::GetDummyWidth($folderName);

		// // LAYER THE IMAGE
		$canvas = Image::canvas(1000, 750,'#ffffff');
		$canvas->insert(Paths::UploadPath($folderName).'/resized.jpg','center',0,-$dx);
		//$canvas->insert($whitemask, 0,0,'center');
		$canvas->insert(Paths::BorderPath($sizeid).'/'.$sysimg.'.png','center',0,0);
		$canvas->save(Paths::UploadPath($folderName).'/'.$img);
				$canvas->resize(400,300, function ($constraint) {
    			$constraint->aspectRatio();
				});
		$canvas->save(Paths::UploadPath($folderName).'/s_'.$img);

	}
}