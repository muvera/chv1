<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CategoriesTableSeeder extends Seeder {


		public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		 DB::table('categories')->delete();

		$items = array(
['sub_id'=>'1', 'border_id'=>'1', 'shape_id'=>'1', 'name'=>'Rectangle Edible Photos', 'description'=>'Standard Rectangular cake image' , 'img'=>'rectangle.jpg', 'active'=>'1'],
['sub_id'=>'1', 'border_id'=>'1', 'shape_id'=>'1', 'name'=>'Round Edible Photos', 'description'=>'Standard round cake image' , 'img'=>'round.jpg', 'active'=>'1'],
['sub_id'=>'1', 'border_id'=>'1', 'shape_id'=>'1', 'name'=>'Hearts Edible Photos', 'description'=>'Standard hearts cake image', 'img'=>'heart.jpg', 'active'=>'1'],
['sub_id'=>'1', 'border_id'=>'1', 'shape_id'=>'1', 'name'=>'Stars Edible Photos', 'description'=>'Standard squares cake image', 'img'=>'square.jpg', 'active'=>'1'],
['sub_id'=>'1', 'border_id'=>'1', 'shape_id'=>'1', 'name'=>'Flowers Edible Photos', 'description'=>'Standard stars cake image', 'img'=>'star.jpg', 'active'=>'1'],
['sub_id'=>'1', 'border_id'=>'1', 'shape_id'=>'1', 'name'=>'Diamond Edible Photos', 'description'=>'Inch Standard oval cake image', 'img'=>'oval.jpg', 'active'=>'1'],
['sub_id'=>'1', 'border_id'=>'1', 'shape_id'=>'1', 'name'=>'Emblem Edible Photos', 'description'=>'Inch Standard flower cake image', 'img'=>'flower.jpg', 'active'=>'1'],
['sub_id'=>'1', 'border_id'=>'1', 'shape_id'=>'1', 'name'=>'Monogram Edible Photos', 'description'=>'Inch Standard diamond cake image', 'img'=>'diamond.jpg', 'active'=>'1'],
['sub_id'=>'1', 'border_id'=>'1', 'shape_id'=>'1', 'name'=>'Oval Edible Photos', 'description'=>'Inch Standard diamond cake image', 'img'=>'diamond.jpg', 'active'=>'1'],
['sub_id'=>'1', 'border_id'=>'1', 'shape_id'=>'1', 'name'=>'Square Edible Photos', 'description'=>'Inch Standard diamond cake image', 'img'=>'diamond.jpg', 'active'=>'1'],
['sub_id'=>'1', 'border_id'=>'1', 'shape_id'=>'1', 'name'=>'Rounded Square Edible Photos', 'description'=>'Inch Standard diamond cake image', 'img'=>'diamond.jpg', 'active'=>'1'],
['sub_id'=>'2', 'border_id'=>'1', 'shape_id'=>'1', 'name'=>'Birthday Borders', 'description'=>'Stantard rectangle image', 'img'=>'birthday.jpg', 'active'=>'1'],
	// ['sub_id'=>'1', 'border_id'=>'1', 'shape_id'=>'1', 'name'=>'Standard Rectangle Edible Photo Prints', 'description'=>'Personalize Standard 1/4 sheet, edible cake image decoration for pastries, cakes and edibles.', 'img'=>'rectangle_images.png', 'active'=>'1'],
	// ['sub_id'=>'1', 'border_id'=>'2', 'shape_id'=>'1', 'name'=>'Standard Circle Edible Photo Prints', 'description'=>'Personalize Standard circular pre-cut edible printed images for cakes, mini cakes and jumbo cupcakes.', 'img'=>'round_images.png', 'active'=>'1'],
	// ['sub_id'=>'1', 'border_id'=>'3', 'shape_id'=>'1', 'name'=>'Cupcakes Edible Photo Prints', 'description'=>'Personalize Standard circular pre-cut cupcake, cookie and oreo cookie edible image decorations.', 'img'=>'cupcake_images.png', 'active'=>'1'],
	// ['sub_id'=>'1', 'border_id'=>'4', 'shape_id'=>'1', 'name'=>'Birthday Edible Border Photo Print', 'description'=>'Customize Fun birthday theme borders for edible cake image decorations.', 'img'=>'birthday.png', 'active'=>'1'],
	// ['sub_id'=>'1', 'border_id'=>'5', 'shape_id'=>'1', 'name'=>'Action Edible Border Photo Print', 'description'=>'Customize Action Theme Cake borders for cakes image decorations', 'img'=>'Action.png', 'active'=>'1'],
	// ['sub_id'=>'1', 'border_id'=>'6', 'shape_id'=>'1', 'name'=>'Halloween Edible Border Photo Print', 'description'=>'Customize Holloween face masks and decorations for your scary cakes', 'img'=>'halloween.png', 'active'=>'0'],
	// ['sub_id'=>'1', 'border_id'=>'7', 'shape_id'=>'1', 'name'=>'Halloween Edible Images', 'description'=>'Halloween Rectangle edible images', 'img'=>'', 'active'=>'0'],
	// ['sub_id'=>'1', 'border_id'=>'8', 'shape_id'=>'1', 'name'=>'Halloween Edible Images', 'description'=>'Halloween Round edible images include', 'img'=>'', 'active'=>'0'],



		);

		// Uncomment the below to run the seeder
		 DB::table('categories')->insert($items);
	}

}