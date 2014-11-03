<?php

class UploadsController extends \BaseController {



	public function process(){
	# Apply Borders & Make Multiple Shapes
	// 1. Make user folder if it dosent exists
	// 2. Create borders & multiple shapes

	// 1
	SessionManager::makeFolder();

	// 2
	if (Session::get('border_make')==1) One::make();
	if (Session::get('border_make')==2) Two::make();
	if (Session::get('border_make')==4) Four::make();
	if (Session::get('border_make')==6) Six::make();
	if (Session::get('border_make')==8) Eight::make();
	if (Session::get('border_make')==12) Twelve::make();
	if (Session::get('border_make')==24) TwentyFour::make();
		

		return Redirect::back();


		}


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
			public function deleteimage($dir){
					$dir = public_path('uploads/' . $dir);
					UploadConfig::deleteDirectory($dir);
			Session::flush('filename');
			Session::flush('dirname');
			Session::flush('imagedata');
			Session::flush('thumbdata');
			Session::flush('user_dir');
			Session::flush('cat_id');
			Session::flush('border_id');
			Session::flush('upload');
			Session::flush('new_name');

					return Redirect::back();

			}


}