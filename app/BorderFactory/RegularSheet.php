<?php
class RegularSheet {


			static public function make(){
					// Get the user dir
					$user_dir = Session::get('user_dir');
					#get the image
					$image = Input::file('image');
					$upload = $image->getClientOriginalName();
					$image->move(public_path('/uploads/'.$user_dir.'/'), $image->getClientOriginalName());
					$new_name = rand(700,0).'.jpg';

					#Resize the uploaded file and rename it
					Image::make(public_path('uploads/'.$user_dir.'/'. $upload))
						->resize(1000, null, function ($constraint) {$constraint->aspectRatio();})
						->save(public_path('uploads/'.$user_dir.'/' . $new_name))
						->save(public_path('uploads/'.$user_dir.'/resized_' . $new_name))
						->resize(100, null, function ($constraint) {$constraint->aspectRatio();})
						->save(public_path('uploads/'.$user_dir.'/thumb_' . $new_name));

					
					#get border file
					$border_file = Input::get('border_file');

					#get border id
					$border_id = Input::get('border_id');
					
					#layer the image
					Image::canvas(1000,750, '#000000')
							->insert(public_path('uploads/'.$user_dir.'/'. $new_name ),'center')
							->insert(public_path('borders/'. $border_file), 'center')
							->save(public_path('uploads/'.$user_dir.'/'. $new_name));

					// Sessions go here
					SessionManager::makeSessions($border_id, $border_file, $upload, $new_name);
					


			}




}