<?php
class Eight {

	public static function make(){

# Making two copies on same sheet
// 1. Get the original shape
// 2. Sheet width
// 3. Sheet height
// 4. Shape size
// 5. Top Padding
// 6. Left Padding
// 7. Send image to Cropper
// 8. Resize the image
// 9. Intervention class make canvas
// 10. Insert firt image
// 11. Insert second image
// 12. Insert third image
// 13. Insert the resized image twice
// 14. Save
// 15. Send new configuratino to Session Manager

// 1			
	One::make();
// 2
	$x = 1000;
// 3
	$y = 750;
// 4
	$size = 225;
	$h = $size;
	$w = $size;
// 5
	$t = 75;
// 6
	$l = 20; 
// 7
if(Session::get('cat_id')==1) { 
		$rotate = 90; 
		$h = 250;
		$w = 335;
		$t = 52;
		$l = 15;
	}else{ 
		$rotate = 0; 
		CropImage::crop_shape();
	}
// 8
	ResizeImage::resize_shape($h,$w, $rotate);

// 9
	Image::canvas($x,$y, '#ffffff')
// 10
	->insert(Paths::image(),'null', $l, $t)
// 11
	->insert(Paths::image(),'null', $l * 2 + $size, $t)
// 12
	->insert(Paths::image(),'null', $l * 3 + $size * 2, $t)
// 13
	->insert(Paths::image(),'null', $l * 4 + $size * 3, $t)

// 10
	->insert(Paths::image(),'null', $l, $t * 3 + $size)
// 11
	->insert(Paths::image(),'null', $l * 2 + $size, $t * 3 + $size)
// 12
	->insert(Paths::image(),'null', $l * 3 + $size * 2, $t * 3 + $size)
// 13
	->insert(Paths::image(),'null', $l * 4 + $size * 3, $t * 3 + $size)
// 14
	->save(Paths::image());
// 15
 	SessionManager::makeSessions();

	}

}