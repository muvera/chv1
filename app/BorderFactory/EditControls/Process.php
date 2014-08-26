<?php
	Class Process {

		public static function DummyCheck($folderName)

		{
		
		if(!file_exists(Paths::UploadPath($folderName).'/dummy.png'))
					{
			Process::DummyMake($folderName);
					}
		}

		public static function DummyMake($folderName)

		{
		// Make a Dummy File
		Image::canvas(10,10)
			->save(Paths::UploadPath($folderName).'/dummy.png');
		}


		public static function DeleteDummy($folderName)

		{
				if(file_exists(Paths::UploadPath($folderName).'/dummy.png'))
					{
			unlink(Paths::UploadPath($folderName.'/dummy.png'));
					}
		}
		


		public static function GetImageWidth($value)

		{
		// Look for Image
		$img = $value;
		list($width) = getimagesize($img);
		return $width;

		}


		public static function GetImageHeigh($value)

		{
		// Look for Image
		$img = $value;
		list($width, $height) = getimagesize($img);
		return $height;

		}


		public static function GetDummyWidth($folderName)

		{
		// Look for Image
		$img = Paths::UploadPath($folderName).'/dummy.png';
		list($width) = getimagesize($img);
		return $width;

		}


		public static function GetDummyHeigh($folderName)

		{
		// Look for Image
		$img = Paths::UploadPath($folderName).'/dummy.png';
		list($width, $height) = getimagesize($img);
		return $height;

		}


		public static function ResizeDummy($folderName, $dx, $dy)

		{
		// Look for Image
		Image::make(Paths::UploadPath($folderName).'/dummy.png')
			->resize($dx,$dy, function ($constraint) {
    			$constraint->aspectRatio();
				})
			->save(Paths::UploadPath($folderName).'/dummy.png');

		}


		public static function ResizeImage($folderName, $ix, $iy)

		{
		// Look for Image
		Image::make(Paths::UploadPath($folderName).'/resized.jpg')
			//->resize($ix,$iy,true)
			->resize($ix,$iy, function ($constraint) {
    			$constraint->aspectRatio();
				})
			->save(Paths::UploadPath($folderName).'/resized.jpg');

		}


		public static function RotateImage($folderName)

		{
		// Look for Image
		Image::make(Paths::UploadPath($folderName).'/resized.jpg')
			->rotate(-90)
			->save(Paths::UploadPath($folderName).'/resized.jpg');

		}



	}
