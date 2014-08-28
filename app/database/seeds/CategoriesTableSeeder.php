<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CategoriesTableSeeder extends Seeder {


		public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		 DB::table('categories')->delete();

		$items = array(

	['border_id'=>'1', 'name'=>'Rectangle', 'description'=>'This is a birthday Description', 'file'=>'rectangle_images.png', 'active'=>'1'],
	['border_id'=>'2', 'name'=>'Circle', 'description'=>'This is a princess Description', 'file'=>'round_images.png', 'active'=>'1'],
	['border_id'=>'3', 'name'=>'Cupcakes', 'description'=>'This is a princess Description', 'file'=>'cupcake_images.png', 'active'=>'1'],
	['border_id'=>'4', 'name'=>'Birthday', 'description'=>'This is a princess Description', 'file'=>'birthday.png', 'active'=>'1'],
	['border_id'=>'5', 'name'=>'Action', 'description'=>'This is a princess Description', 'file'=>'Action.png', 'active'=>'1'],
	['border_id'=>'6', 'name'=>'Super heroes', 'description'=>'This is a princess Description', 'file'=>'super_heroe.png', 'active'=>'0'],
	['border_id'=>'7', 'name'=>'Anniversary', 'description'=>'This is a princess Description', 'file'=>'anniversary.png', 'active'=>'0'],
	['border_id'=>'8', 'name'=>'Halloween', 'description'=>'This is a princess Description', 'file'=>'halloween.png', 'active'=>'0'],
	['border_id'=>'9', 'name'=>'Christmas', 'description'=>'This is a princess Description', 'file'=>'christmas.png', 'active'=>'0'],
	['border_id'=>'10', 'name'=>'Valentines', 'description'=>'This is a princess Description', 'file'=>'valentines.png', 'active'=>'0'],
	['border_id'=>'11', 'name'=>'Easter', 'description'=>'This is a princess Description', 'file'=>'easter.png', 'active'=>'0'],
	['border_id'=>'12', 'name'=>'Magazine', 'description'=>'This is a princess Description', 'file'=>'magazine.png', 'active'=>'0'],
	['border_id'=>'13', 'name'=>'Celebrities', 'description'=>'This is a princess Description', 'file'=>'celebrities.png', 'active'=>'0'],
	['border_id'=>'14', 'name'=>'Baby Shower', 'description'=>'This is a princess Description', 'file'=>'babyshower.png', 'active'=>'0'],
	['border_id'=>'15', 'name'=>'Graduation', 'description'=>'This is a princess Description', 'file'=>'graduation.png', 'active'=>'0'],
	['border_id'=>'16', 'name'=>'Wedding', 'description'=>'This is a princess Description', 'file'=>'wedding.png', 'active'=>'0'],
	['border_id'=>'17', 'name'=>'Princess', 'description'=>'This is a princess Description', 'file'=>'princess.png', 'active'=>'0'],
	['border_id'=>'18', 'name'=>'Sports', 'description'=>'This is a princess Description', 'file'=>'sports.png', 'active'=>'0'],
	['border_id'=>'19', 'name'=>'Casino', 'description'=>'This is a princess Description', 'file'=>'casino.png', 'active'=>'0'],
	['border_id'=>'20', 'name'=>'Animals', 'description'=>'This is a princess Description', 'file'=>'animals.png', 'active'=>'0'],
	['border_id'=>'21', 'name'=>'Fashion', 'description'=>'This is a princess Description', 'file'=>'fashion.png', 'active'=>'0'],
	['border_id'=>'22', 'name'=>'Fantasy', 'description'=>'This is a princess Description', 'file'=>'fantasy.png', 'active'=>'0'],
	['border_id'=>'23', 'name'=>'Vintage', 'description'=>'This is a princess Description', 'file'=>'vintage.png', 'active'=>'0'],
	['border_id'=>'24', 'name'=>'Candy', 'description'=>'This is a princess Description', 'file'=>'candy.png', 'active'=>'0'],
	['border_id'=>'25', 'name'=>'Pastry', 'description'=>'This is a princess Description', 'file'=>'pastry.png', 'active'=>'0'],
	['border_id'=>'26', 'name'=>'Robots', 'description'=>'This is a princess Description', 'file'=>'robots.png', 'active'=>'0'],
	['border_id'=>'27', 'name'=>'Movies', 'description'=>'This is a princess Description', 'file'=>'movies.png', 'active'=>'0'],
	['border_id'=>'28', 'name'=>'Music', 'description'=>'This is a princess Description', 'file'=>'music.png', 'active'=>'0'],
	['border_id'=>'29', 'name'=>'Technology', 'description'=>'This is a princess Description', 'file'=>'technology.png', 'active'=>'0'],
	['border_id'=>'30', 'name'=>'Dinosaurs', 'description'=>'This is a princess Description', 'file'=>'dinosaurs.png', 'active'=>'0'],
	['border_id'=>'31', 'name'=>'Websites', 'description'=>'This is a princess Description', 'file'=>'websites.png', 'active'=>'0'],
	['border_id'=>'32', 'name'=>'Cities', 'description'=>'This is a princess Description', 'file'=>'cities.png', 'active'=>'0'],
	['border_id'=>'33', 'name'=>'Video Games', 'description'=>'This is a princess Description', 'file'=>'video_games.png', 'active'=>'0'],










		);

		// Uncomment the below to run the seeder
		 DB::table('categories')->insert($items);
	}

}