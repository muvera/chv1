<?php
Class ResizeImage {

# Intervention Script - Resize & Make Thumb
// 1. Make a new image from source
// 2. Resize to width to 1000 px & retain ratio
// 3. Save to /uploads/userid/$new_name.jpg
// 4. Save to /uploads/userid/resized_$new_name.jpg
// 5. Resize width to 100 px & retain ratio
// 6. Save to /uploads/userid/thumb_$new_name.jpg

public static function make(){

// Intervention Class ---------------------------

	// 1
Image::make(Paths::rootImage())
	// 2
		->resize(1000, null, function ($constraint) {$constraint->aspectRatio();})
	// 3
		->save(Paths::image())
	// 4
		->save(Paths::resized())
	// 5
		->resize(100, null, function ($constraint) {$constraint->aspectRatio();})
	// 6
		->save(Paths::thumb())
		
		->resize(100,null, function ($constraint) {$constraint->aspectRatio();})
		
		->save(Paths::mini());
}

public static function resize_shape($x, $y, $rotate){


	
// Intervention Class ---------------------------
	// 1
Image::make(Paths::image())
	// 2
	->rotate($rotate)
	// 3
	->resize($x, $y)
	// 4
	->save(Paths::image())
	// 5
	->save(Paths::resized());


}






}