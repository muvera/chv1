<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class SubcategoriesTableSeeder extends Seeder {

	public function run()
	{

		DB::table('subcategories')->delete();
		$items = array(

['name'=>'Edible Photos', 'description'=>'Edible Cake photos category'],
['name'=>'Borders', 'description'=>'Ready Designs'],
['name'=>'Designer Prints', 'description'=>'Ready Designs'],
					);

		// Uncomment the below to run the seeder
		 DB::table('subcategories')->insert($items);



	}

}