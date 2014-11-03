<?php

class Four {
		public static function make(){
# Making two copies on same sheet
// 1. Get the original shape
// 2. Sheet width
// 3. Sheet height
// 4. Divide by 2 to get half
// 5. Divide by 6 to get top padding
// 6. Left Padding
// 7. Second Row configuration
// 8. Rotate if necessary
// 9. Send image to Cropper
// 10. Resize the image using page values
// 11. Intervention start from file
// 12. Insert resized image once
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
	$h = 350;
	$w = 350;
// 5
	$top_padding = 10;
// 6
	$left_padding = 74; 
// 7
	$row2x = 390;

	if(Session::get('cat_id')==1) { 
		$rotate = 0; 
		$h = 350;
		$w = 469;
		$top_padding = 10;
		$left_padding = 15;
	}else{ 
		$rotate = 0; 
		CropImage::crop_shape();
	}

// 10
	ResizeImage::resize_shape($w,$h,$rotate);

// 11
	Image::canvas(1000,750, '#ffffff')
// 12
	->insert(Paths::image(),'null', $left_padding, $top_padding)
// 13
	->insert(Paths::image(),'null', 500 + $left_padding, $top_padding)
// 12
	->insert(Paths::image(),'null', $left_padding, $row2x)
// 13
	->insert(Paths::image(),'null', 500 + $left_padding, $row2x)
// 14
	->save(Paths::image());
// 15
 	SessionManager::makeSessions();
		
		}

}