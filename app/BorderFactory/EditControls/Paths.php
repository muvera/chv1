<?php
class Paths {
	// Singular
	public static function UploadPath($folderName)
	{
		// Path to user uploaded files
		$path = public_path().'/uploads/'.$folderName;
		return $path;
	}

	public static function BorderPath($size)
	{
		// Path to uploaded files
		$path = public_path().'/assets/factory/borders/'.$size;
		return $path;
	}

		// Plural
	public static function UploadsPath()
	{
		// Path to all uploaded files
		$path = public_path().'/uploads/';
		return $path;
	}

	// Plural
	public static function SystemPath()
	{
		// Path to uploaded files
		$path = public_path().'/assets/';
		return $path;
	}

	// Plural 
	public static function BordersPath()
	{
		// Path to border files
		$path = public_path().'/assets/factory/borders/';
		return $path;
	}

}