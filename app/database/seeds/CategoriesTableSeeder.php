<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CategoriesTableSeeder extends Seeder {


		public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		 DB::table('categories')->delete();

		$items = array(

	['border_id'=>'1', 'name'=>'Birthday', 'description'=>'This is a birthday Description'],
	['border_id'=>'2', 'name'=>'Princess', 'description'=>'This is a princess Description']







		);

		// Uncomment the below to run the seeder
		 DB::table('categories')->insert($items);
	}

}