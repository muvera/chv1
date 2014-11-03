<?php
class Twelve {


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
	$size = 200;
	$w = 200;
	$h = 200;
// 5
	$t = 38;
// 6
	$l = 40; 
// 7
if(Session::get('cat_id')==1) { 
		$rotate = 0; 
		$h = 167;
		$w = 222;
		$t = 38;
		$l = 36;
	}else{ 
		$rotate = 0; 
		CropImage::crop_shape();
	}
// 8
	ResizeImage::resize_shape($w,$h, $rotate);

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
	->insert(Paths::image(),'null', $l, $t * 2 + $size)
// 11
	->insert(Paths::image(),'null', $l * 2 + $size, $t * 2 + $size)
// 12
	->insert(Paths::image(),'null', $l * 3 + $size * 2, $t * 2 + $size)
// 13
	->insert(Paths::image(),'null', $l * 4 + $size * 3, $t * 2 + $size)


// 10
	->insert(Paths::image(),'null', $l, $t * 3 + $size * 2)
// 11
	->insert(Paths::image(),'null', $l * 2 + $size, $t * 3 + $size * 2)
// 12
	->insert(Paths::image(),'null', $l * 3 + $size * 2, $t * 3 + $size * 2)
// 13
	->insert(Paths::image(),'null', $l * 4 + $size * 3, $t * 3 + $size * 2)


// 14
	->save(Paths::image());
// 15
 	SessionManager::makeSessions();




}








	}
