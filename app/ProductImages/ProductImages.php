<?php
Class ProductImages {


	
# Check if product previewimage Exists
# if not than create it
	static public function check(){

				if(!file_exists(Paths::rootImage())){
					
				}else{
					
					if(Session::get('last_uploaded')){
					if(!file_exists(Paths::image())) GenerateImages::make();
						}

				}

	}



}