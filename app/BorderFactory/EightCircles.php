<?php
class EightCircles {

	public static function make(){

					#get the image
					$image = Input::file('image');
					$upload = $image->getClientOriginalName();
					$image->move(public_path('/uploads/'), $image->getClientOriginalName());
					$new_name = rand(700,0).'.jpg';

					#Resize the uploaded file and rename it
					Image::make(public_path('uploads/'. $upload))
						->resize(350, null, function ($constraint) {$constraint->aspectRatio();})
						->crop(250, 250)
						->save(public_path('uploads/' . $new_name))
						->resize(100, null, function ($constraint) {$constraint->aspectRatio();})
						->save(public_path('uploads/thumb_' . $new_name));

					
					#get border file
					$border_file = Input::get('border_file');

					#get border id
					$border_id = Input::get('border_id');

					#Grid
					$col1 = 0;
					$col2 = 175;
					$col3 = 374;
					$col4 = 578;
					$col5 = 750;
				

					$row1 = 0;
					$row2 = 250;
					$row3 = 500;
					

					
					#layer the image
					Image::canvas(1000,750, '#000000')
							// Col1
							->insert(public_path('uploads/'. $new_name ),'null', $col1, $row1)
							->insert(public_path('uploads/'. $new_name ),'null', $col1, $row3)
							// Col2
							->insert(public_path('uploads/'. $new_name ),'null', $col2, $row2)
							// Col3
							->insert(public_path('uploads/'. $new_name ),'null', $col3, $row1)
							->insert(public_path('uploads/'. $new_name ),'null', $col3, $row3)
							// Col4
							->insert(public_path('uploads/'. $new_name ),'null', $col4, $row2)
							// Col3
							->insert(public_path('uploads/'. $new_name ),'null', $col5, $row1)
							->insert(public_path('uploads/'. $new_name ),'null', $col5, $row3)
	


							->insert(public_path('borders/'. $border_file), 'center')
							->save(public_path('uploads/'. $new_name));
					
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