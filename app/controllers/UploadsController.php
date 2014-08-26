<?php

class UploadsController extends \BaseController {


	public function create()
	{
		return View::make('uploads.create');
	}

		public function store()
	{
		

			$file = Input::file('thumbnail');
			$file->getClientOriginalName();
			$file->move(public_path('/borders/'), $file->getClientOriginalName());

			$border = new Border;
			$border->name = Input::get('name');
			$border->description = Input::get('name');
			$border->cat_id = Input::get('category');
			$border->size_id = Input::get('size');
			$border->file = $file->getClientOriginalName();
			$border->save();


			dd('ok');
	}

	public function process(){


					#get the image
					$image = Input::file('image');
					$upload = $image->getClientOriginalName();
					$image->move(public_path('/uploads/'), $image->getClientOriginalName());
					$new_name = rand(700,0).'.jpg';

					#Resize the uploaded file and rename it
					Image::make(public_path('uploads/'. $upload))
						->resize(1000, null, function ($constraint) {$constraint->aspectRatio();})
						->save(public_path('uploads/' . $new_name))
						->resize(100, null, function ($constraint) {$constraint->aspectRatio();})
						->save(public_path('uploads/thumb_' . $new_name));

					
					#get border file
					$border_file = Input::get('border_file');

					#get border id
					$border_id = Input::get('border_id');
					
					#layer the image
					Image::canvas(1000,750, '#000000')
							->insert(public_path('uploads/'. $new_name ),'center')
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

					return Redirect::back();


		}

			#Load uploaded Image to new design
			public function loadimage($border_file){

					// Orginal File
					$upload = Session::get('upload');
					$new_name = Session::get('process');


					#Resize the uploaded file and rename it
					Image::make(public_path('uploads/'. $upload))
						->resize(1000, null, function ($constraint) {$constraint->aspectRatio();})
						->save(public_path('uploads/' . $new_name));

					
					
					#layer the image
					Image::canvas(1000,750, '#000000')
							->insert(public_path('uploads/'. $new_name ),'center')
							->insert(public_path('borders/'. $border_file), 'center')
							->save(public_path('uploads/'. $new_name));
					
					#add sessions
					// Add border file
					Session::put('border_file', $border_file);


					return Redirect::back();

			}

			#Delete Image

			public function deleteimage(){
			
					#delete sessions
					// border File
					Session::forget('border_file');
					// border Id
					Session::forget('border_id');
					// Orginal File
					Session::forget('upload');
					// Generated image
					Session::forget('process');
					// thumbnail
					Session::forget('thumbnail');
					// Category Id
					Session::forget('cat_id');
					// Size Id
					Session::forget('size_id');

					return Redirect::back();

			}


}