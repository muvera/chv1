<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CategoriesTableSeeder extends Seeder {


		public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		 DB::table('categories')->delete();

		$items = array(

	['border_id'=>'1', 'shape_id'=>'1', 'name'=>'Rectangle', 'description'=>'This is a birthday Description', 'file'=>'rectangle_images.png', 'active'=>'1'],
	['border_id'=>'2', 'shape_id'=>'1', 'name'=>'Circle', 'description'=>'This is a princess Description', 'file'=>'round_images.png', 'active'=>'1'],
	['border_id'=>'3', 'shape_id'=>'1', 'name'=>'Cupcakes', 'description'=>'This is a princess Description', 'file'=>'cupcake_images.png', 'active'=>'1'],
	['border_id'=>'4', 'shape_id'=>'1', 'name'=>'Birthday', 'description'=>'This is a princess Description', 'file'=>'birthday.png', 'active'=>'1'],
	['border_id'=>'5', 'shape_id'=>'1', 'name'=>'Action', 'description'=>'This is a princess Description', 'file'=>'Action.png', 'active'=>'1'],
	['border_id'=>'6', 'shape_id'=>'1', 'name'=>'Super heroes', 'description'=>'This is a princess Description', 'file'=>'super_heroe.png', 'active'=>'0'],
	['border_id'=>'7', 'shape_id'=>'1', 'name'=>'Anniversary', 'description'=>'This is a princess Description', 'file'=>'anniversary.png', 'active'=>'0'],
	['border_id'=>'8', 'shape_id'=>'1', 'name'=>'Halloween', 'description'=>'This is a princess Description', 'file'=>'halloween.png', 'active'=>'0'],
	['border_id'=>'9', 'shape_id'=>'1', 'name'=>'Christmas', 'description'=>'This is a princess Description', 'file'=>'christmas.png', 'active'=>'0'],
	['border_id'=>'10', 'shape_id'=>'1', 'name'=>'Valentines', 'description'=>'This is a princess Description', 'file'=>'valentines.png', 'active'=>'0'],
	['border_id'=>'11', 'shape_id'=>'1', 'name'=>'Easter', 'description'=>'This is a princess Description', 'file'=>'easter.png', 'active'=>'0'],
	['border_id'=>'12', 'shape_id'=>'1', 'name'=>'Magazine', 'description'=>'This is a princess Description', 'file'=>'magazine.png', 'active'=>'0'],
	['border_id'=>'13', 'shape_id'=>'1', 'name'=>'Celebrities', 'description'=>'This is a princess Description', 'file'=>'celebrities.png', 'active'=>'0'],
	['border_id'=>'14', 'shape_id'=>'1', 'name'=>'Baby Shower', 'description'=>'This is a princess Description', 'file'=>'babyshower.png', 'active'=>'0'],
	['border_id'=>'15', 'shape_id'=>'1', 'name'=>'Graduation', 'description'=>'This is a princess Description', 'file'=>'graduation.png', 'active'=>'0'],
	['border_id'=>'16', 'shape_id'=>'1', 'name'=>'Wedding', 'description'=>'This is a princess Description', 'file'=>'wedding.png', 'active'=>'0'],
	['border_id'=>'17', 'shape_id'=>'1', 'name'=>'Princess', 'description'=>'This is a princess Description', 'file'=>'princess.png', 'active'=>'0'],
	['border_id'=>'18', 'shape_id'=>'1', 'name'=>'Sports', 'description'=>'This is a princess Description', 'file'=>'sports.png', 'active'=>'0'],
	['border_id'=>'19', 'shape_id'=>'1', 'name'=>'Casino', 'description'=>'This is a princess Description', 'file'=>'casino.png', 'active'=>'0'],
	['border_id'=>'20', 'shape_id'=>'1', 'name'=>'Animals', 'description'=>'This is a princess Description', 'file'=>'animals.png', 'active'=>'0'],
	['border_id'=>'21', 'shape_id'=>'1', 'name'=>'Fashion', 'description'=>'This is a princess Description', 'file'=>'fashion.png', 'active'=>'0'],
	['border_id'=>'22', 'shape_id'=>'1', 'name'=>'Fantasy', 'description'=>'This is a princess Description', 'file'=>'fantasy.png', 'active'=>'0'],
	['border_id'=>'23', 'shape_id'=>'1', 'name'=>'Vintage', 'description'=>'This is a princess Description', 'file'=>'vintage.png', 'active'=>'0'],
	['border_id'=>'24', 'shape_id'=>'1', 'name'=>'Candy', 'description'=>'This is a princess Description', 'file'=>'candy.png', 'active'=>'0'],
	['border_id'=>'25', 'shape_id'=>'1', 'name'=>'Pastry', 'description'=>'This is a princess Description', 'file'=>'pastry.png', 'active'=>'0'],
	['border_id'=>'26', 'shape_id'=>'1', 'name'=>'Robots', 'description'=>'This is a princess Description', 'file'=>'robots.png', 'active'=>'0'],
	['border_id'=>'27', 'shape_id'=>'1', 'name'=>'Movies', 'description'=>'This is a princess Description', 'file'=>'movies.png', 'active'=>'0'],
	['border_id'=>'28', 'shape_id'=>'1', 'name'=>'Music', 'description'=>'This is a princess Description', 'file'=>'music.png', 'active'=>'0'],
	['border_id'=>'29', 'shape_id'=>'1', 'name'=>'Technology', 'description'=>'This is a princess Description', 'file'=>'technology.png', 'active'=>'0'],
	['border_id'=>'30', 'shape_id'=>'1', 'name'=>'Dinosaurs', 'description'=>'This is a princess Description', 'file'=>'dinosaurs.png', 'active'=>'0'],
	['border_id'=>'31', 'shape_id'=>'1', 'name'=>'Websites', 'description'=>'This is a princess Description', 'file'=>'websites.png', 'active'=>'0'],
	['border_id'=>'32', 'shape_id'=>'1', 'name'=>'Cities', 'description'=>'This is a princess Description', 'file'=>'cities.png', 'active'=>'0'],
	['border_id'=>'33', 'shape_id'=>'1', 'name'=>'Video Games', 'description'=>'This is a princess Description', 'file'=>'video_games.png', 'active'=>'0'],










		);

		// Uncomment the below to run the seeder
		 DB::table('categories')->insert($items);
	}

}