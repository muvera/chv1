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

	if(Session::get('cat_id')==3){
		# If the category changes make Circles
		if(Session::get('border_make')==12){
				TwelveCircles::make();
				}
		if(Session::get('border_make')==8){
				EightCircles::make();
				}
		if(Session::get('border_make')==24){
				TwentyCircles::make();
				}

		return Redirect::back();

	}else{
		// make a folder or use the folder
		SessionManager::makeFolder();
		// Rund regular sheet class
		RegularSheet::make();

		return Redirect::back();
					}


		}

			#Load uploaded Image to new design
			public function loadimage($border_file){

					// Orginal File
					$upload = Session::get('upload');
					$new_name = Session::get('process');
					$user_dir = Session::get('user_dir');


					#Resize the uploaded file and rename it
					Image::make(public_path('uploads/'.$user_dir.'/'. $upload))
						->resize(1000, null, function ($constraint) {$constraint->aspectRatio();})
						->save(public_path('uploads/' .$user_dir.'/'.  $new_name));

					
					#layer the image
					Image::canvas(1000,750, '#000000')
							->insert(public_path('uploads/'.$user_dir.'/'.  $new_name ),'center')
							->insert(public_path('borders/'. $border_file), 'center')
							->save(public_path('uploads/'.$user_dir.'/'.  $new_name));
					
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