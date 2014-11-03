<?php
class RegularSheet {


			static public function make(){
# Use upload configuration
UploadConfig::make();

# Intervention Script - Resize & Make Thumb
// 8. Make a new image from source
// 9. Resize to width to 1000 px & retain ratio
// 10. Save to /uploads/userid/$new_name.jpg
// 11. Save to /uploads/userid/resized_$new_name.jpg
// 12. Resize width to 100 px & retain ratio
// 13. Save to /uploads/userid/thumb_$new_name.jpg

# Intervention Script - Layer the image
// 14. Make white background 
// 15. Insert $new_name image center
// 16. Insert Border Center
// 17. Save as $new_image
// 18. Send Details to SessionManager


// Intervention Class ---------------------------
	// 8
Image::make(public_path('uploads/'.Session::get('user_dir').'/'. Session::get('upload')))
	// 9
		->resize(1000, null, function ($constraint) {$constraint->aspectRatio();})
	// 10
		->save(public_path('uploads/'.Session::get('user_dir').'/' . Session::get('new_name')))
	// 11
		->save(public_path('uploads/'.Session::get('user_dir').'/resized_' . Session::get('new_name')))
	// 12
		->resize(100, null, function ($constraint) {$constraint->aspectRatio();})
	// 13
		->save(public_path('uploads/'.Session::get('user_dir').'/thumb_' . Session::get('new_name')));

	
// Use Class Intervention ---------------------------
	// 14
	Image::canvas(1000,750, '#000000')
	// 15
			->insert(public_path('uploads/'.Session::get('user_id').'/'. Session::get('new_name') ),'center')
	// 16
			->insert(public_path('borders/'. $border_file), 'center')
	// 17
			->save(public_path('uploads/'.Session::get('user_dir').'/'. Session::get('new_name')));
	// 18
	SessionManager::makeSessions();
	


			}




}