<?php
class CropImage {
//Global Crop
public static function crop_shape(){

Image::make(Paths::image())
	// 2
	->crop(705, 705, 148, 25)
	// 4
	->save(Paths::image())
	// 5
	->save(Paths::resized());

}


}