<?php

class Two {
		public static function make(){
# Making two copies on same sheet
// 1. Get the original shape
// 2. Sheet width
// 3. Sheet height
// 4. Divide by 2 to get half
// 5. Divide by 6 to get top padding
// 6. Left Padding
// 7. Rotate if necessary
// 8. Send image to Cropper
// 9. Resize the image using page values
// 10. Make Canvas with white background
// 11. Insert resized image once
// 12. Insert the resized image twice
// 13. Save
// 14. Send new configuratino to Session Manager

// 1			
	One::make();
// 2
	$x = 1000;
// 3
	$y = 750;
// 4
	$w = $x / 2;
	$h = $x / 2;
// 5
	$top_padding = 750 / 6;
// 6
	$left_padding = 0; 
// 7
	if(Session::get('cat_id')==1) { 
		$rotate = 90; 
		$h = 666;
		$w = 500;
		$top_padding = 40;
	}else{ 
		$rotate = 0; 
		CropImage::crop_shape();
	}
// 8
	
// 9
	ResizeImage::resize_shape($w,$h,$rotate);
// 10
	Image::canvas(1000,750, '#ffffff')
// 11
	->insert(Paths::image(),'null', $left_padding, $top_padding)
// 12
	->insert(Paths::image(),'null', $w + $left_padding, $top_padding)
// 13
	->save(Paths::image());
// 14
 	SessionManager::makeSessions();
		
		}

}