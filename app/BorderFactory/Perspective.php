<?php

class Perspective{


	public static function make($img){

// Set it up
$img_name = $img; 
$src_img = imagecreatefromjpeg($img_name); 
$magnify = 4;

// Magnify the size
$w = imagesx($src_img); 
$h = imagesy($src_img); 
$dst_img = imagecreatetruecolor($w * $magnify, $h * $magnify);
imagecopyresampled($dst_img, $src_img, 0, 0, 0, 0, $w * $magnify, $h * $magnify, $w, $h);
$src_img = $dst_img;

// Skew it
$w *= $magnify;
$h *= $magnify;
$new_lh = abs($h * 0.90);
$new_rh = $h ; 
$step = abs((($new_rh - $new_lh) / 2) / $w);
$from_top = ($new_rh - $new_lh) / 2 ; 
$dst_img = imagecreatetruecolor($w, $new_rh);
$bg_colour = imagecolorallocate($dst_img, 255, 255, 255); 
imagefill($dst_img, 0, 0, $bg_colour); 
for ($i = 0 ; $i < $w ; $i ++)
{
    imagecopyresampled($dst_img, $src_img, $i, $from_top - $step * $i, $i, 0, 1, $new_lh + $step * $i * 2, 1, $h); 
}

// Reduce the size to "anti-alias" it
$src_img = $dst_img;
$dst_img = imagecreatetruecolor($w / $magnify  * 0.85, $new_rh / $magnify);
imagecopyresampled ($dst_img, $src_img, 0, 0, 0, 0, $w / $magnify * 0.85, $h / $magnify, $w, $h);

imagejpeg($dst_img, $img); 



	}


}
		

?>