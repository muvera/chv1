<?php
class One {


static public function make(){
# Use upload configuration
# Resize Image Global Class
UploadConfig::make();
ResizeImage::make();

# Intervention Script - Layer the image
// 1. Make white background 
// 2. Insert $new_name image center
// 3. Insert Border Center
// 4. Save as $new_image
// 5. Resize image for cake sample
// 6. Save the thumb image
// 7. Send Details to SessionManager

// How many shapes need to be created.
$make = Session::get('border_make');

if($make == 1) { $w = 250; $h = 134;}
if($make == 2) { $w = 225; $h = 121;}
if($make == 4) { $w = 200; $h = 107;}
if($make == 6) { $w = 175; $h = 94;}
if($make == 8) { $w = 150; $h = 80;}
if($make == 12) { $w = 125; $h = 67;}
if($make == 24) { $w = 100; $h = 54;}

// Use Class Intervention ---------------------------
	// 1
	Image::canvas(1000,750, '#000000')
	// 2
	->insert(Paths::image(),'center')
	// 3
	->insert(Paths::border(), 'center')
	// 4
	->save(Paths::image())
	// 5
	->resize($w,$h)
	// 6
	->save(Paths::thumb());
	// 7


	Sample::make();
	SessionManager::makeSessions();
	if(!ImagePaths::rootImage() == Session::get('last_uploaded')){
	Session::put('last_uploaded', ImagePaths::rootImage());
	Session::put('last_uploaded_mini', ImagePaths::mini());	
	}

	


			}



}