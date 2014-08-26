<?php
class EightInch {



	public static function makeborders()
	{



			$x=1; 
			do {

			echo "Image: $x  is ready<br>";
			// Get file to make border
			$img = Image::make(public_path().'/assets/factory/borders/categories/patterns/'.$x.'.png');
			// Apply the mask
			$img->mask(public_path().'/assets/factory/borders/4/mask.png', true);
			//save to folder
			$img->save(public_path().'/assets/factory/borders/4/'.$x.'.png');
			$img->resize(400,300);
			//save to thumb folder
			$img->save(public_path().'/assets/factory/borders/4/thumb/'.$x.'.png');
			  $x++;
			} while ($x<=1);

			echo 'ok';	


  }



// Apply white background to the Border But leave midle transparent
	public static function maskborders()
	{



			$x=21; 
			do {

			echo "Image: $x  is ready<br>";
			// Get file to make border
			$img = Image::make(public_path().'/assets/factory/borders/categories/patterns/'.$x.'.png');
			//save to folder
			$img->insert(public_path().'/assets/factory/borders/30/whitemask.png');
			//save to Image folder
			$img->save(public_path().'/assets/factory/borders/30/'.$x.'.png');
			$img->resize(400,300,true);
			$img->save(public_path().'/assets/factory/borders/30/thumb/'.$x.'.png');
			  $x++;
			} while ($x<=30);

			echo 'ok';	


  }


  // Apply white shape background to make shapes
	public static function maskprints()
	{

			$x=1; 
			do {

			echo "Image: $x  is ready<br>";
			// Get file to make border
			$img = Image::make(public_path().'/assets/factory/borders/categories/patterns/'.$x.'.png');
			//save to folder
			$img->insert(public_path().'/assets/factory/borders/22/whitemask.png');
			//save to Image folder
			$img->save(public_path().'/assets/factory/borders/22/'.$x.'.png');
			// Resize thumb
			$img->resize(400,300,true);
			// Save image in thumb folder
			$img->save(public_path().'/assets/factory/borders/22/thumb/'.$x.'.png');
			  $x++;
			} while ($x<=60);

			echo 'ok';	

	}


  // Apply white shape background to make shapes
	public static function makecategories()
	{

$canvas = Image::canvas(1000,750,'#ffffff');		
$img = Image::make($canvas);
$img->insert(public_path().'/assets/factory/borders/categories/patterns/51.png', 0, 0, 'center');
$img->insert(public_path().'/assets/factory/borders/categories/patterns/52.png', -100, 0, 'center');
$img->insert(public_path().'/assets/factory/borders/categories/patterns/53.png', -200, 0, 'center');
$img->insert(public_path().'/assets/factory/borders/categories/patterns/54.png', -300, 0, 'center');
$img->insert(public_path().'/assets/factory/borders/categories/patterns/55.png', -400, 0, 'center');
$img->insert(public_path().'/assets/factory/borders/categories/patterns/56.png', -500, 0, 'center');
$img->insert(public_path().'/assets/factory/borders/categories/patterns/57.png', -600, 0, 'center');
$img->insert(public_path().'/assets/factory/borders/categories/patterns/58.png', -700, 0, 'center');
$img->insert(public_path().'/assets/factory/borders/categories/patterns/59.png', -800, 0, 'center');

$img->resize(400,300);
$img->save(public_path().'/assets/categories/6.jpg');


			//public_path().'/assets/factory/borders/categories/patterns/'.$x.'.png' 
			// Get file to make border

			echo 'ok';	


	}
			  






}