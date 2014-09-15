<?php
class TwentyCircles {


	public static function make(){

					# user dir
					$user_dir = Session::get('user_dir');

					#get the image
					$image = Input::file('image');
					$upload = $image->getClientOriginalName();
					$image->move(public_path('/uploads/'. $user_dir.'/'), $image->getClientOriginalName());
					$new_name = rand(700,0).'.jpg';

					#Resize the uploaded file and rename it
					Image::make(public_path('uploads/'. $user_dir.'/'. $upload))
						->resize(200, null, function ($constraint) {$constraint->aspectRatio();})
						->crop(150, 150)
						->save(public_path('uploads/' . $user_dir.'/'. $new_name))
						->resize(100, null, function ($constraint) {$constraint->aspectRatio();})
						->save(public_path('uploads/' . $user_dir.'/thumb_'. $new_name));

					
					#get border file
					$border_file = Input::get('border_file');

					#get border id
					$border_id = Input::get('border_id');

					#Grid
					$col1 = 13;
					$col2 = 178;
					$col3 = 343;
					$col4 = 508;
					$col5 = 673;
					$col6 = 838;

					$row1 = 20;
					$row2 = 206;
					$row3 = 392;
					$row4 = 578;

					
					#layer the image
					Image::canvas(1000,750, '#000000')
							// Col1
							->insert(public_path('uploads/'. $user_dir.'/'. $new_name ),'null', $col1, $row1)
							->insert(public_path('uploads/'. $user_dir.'/'. $new_name ),'null', $col1, $row2)
							->insert(public_path('uploads/'. $user_dir.'/'. $new_name ),'null', $col1, $row3)
							->insert(public_path('uploads/'. $user_dir.'/'. $new_name ),'null', $col1, $row4)
							// Col2
							->insert(public_path('uploads/'. $user_dir.'/'. $new_name ),'null', $col2, $row1)
							->insert(public_path('uploads/'. $user_dir.'/'. $new_name ),'null', $col2, $row2)
							->insert(public_path('uploads/'. $user_dir.'/'. $new_name ),'null', $col2, $row3)
							->insert(public_path('uploads/'. $user_dir.'/'. $new_name ),'null', $col2, $row4)
							// Col3
							->insert(public_path('uploads/'. $user_dir.'/'. $new_name ),'null', $col3, $row1)
							->insert(public_path('uploads/'. $user_dir.'/'. $new_name ),'null', $col3, $row2)
							->insert(public_path('uploads/'. $user_dir.'/'. $new_name ),'null', $col3, $row3)
							->insert(public_path('uploads/'. $user_dir.'/'. $new_name ),'null', $col3, $row4)
							// Col4
							->insert(public_path('uploads/'. $user_dir.'/'. $new_name ),'null', $col4, $row1)
							->insert(public_path('uploads/'. $user_dir.'/'. $new_name ),'null', $col4, $row2)
							->insert(public_path('uploads/'. $user_dir.'/'. $new_name ),'null', $col4, $row3)
							->insert(public_path('uploads/'. $user_dir.'/'. $new_name ),'null', $col4, $row4)
							// Col5
							->insert(public_path('uploads/'. $user_dir.'/'. $new_name ),'null', $col5, $row1)
							->insert(public_path('uploads/'. $user_dir.'/'. $new_name ),'null', $col5, $row2)
							->insert(public_path('uploads/'. $user_dir.'/'. $new_name ),'null', $col5, $row3)
							->insert(public_path('uploads/'. $user_dir.'/'. $new_name ),'null', $col5, $row4)
							// Col6
							->insert(public_path('uploads/'. $user_dir.'/'. $new_name ),'null', $col6, $row1)
							->insert(public_path('uploads/'. $user_dir.'/'. $new_name ),'null', $col6, $row2)
							->insert(public_path('uploads/'. $user_dir.'/'. $new_name ),'null', $col6, $row3)
							->insert(public_path('uploads/'. $user_dir.'/'. $new_name ),'null', $col6, $row4)



							->insert(public_path('borders/'. $border_file), 'center')
							->save(public_path('uploads/'. $user_dir.'/'. $new_name));
					
					#add sessions
					// Add border Id
					Session::put('border_id', $border_id);
					// Add border Id
					Session::put('border_file', $border_file);
					// Orginal File
					Session::put('upload', $upload);
					// Generated image
					Session::put('process', $new_name);
					// thumbnail
					Session::put('thumbnail', 'thumb_' . $new_name);
					// Size Id for price and size
					Session::put('size_id', Input::get('size_id'));
					// Category Id
					Session::put('cat_id', Input::get('cat_id'));
				}

}