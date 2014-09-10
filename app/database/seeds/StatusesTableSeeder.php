<?php

// Composer: "fzaninotto/faker": "v1.3.0"
//use Faker\Factory as Faker;

class StatusesTableSeeder extends Seeder {

	public function run()
	{
		 DB::table('statuses')->delete();


		$items = array(
			['name'=>'processing', 'file'=>'green.png'],
			['name'=>'complited', 'file'=>'blue.png'],
			['name'=>'refunded', 'file'=>'gray.png'],
			['name'=>'lost', 'file'=>'orange.png'],
			['name'=>'cancelled', 'file'=>'red.png']
			);

	// Uncomment the below to run the seeder
		 DB::table('statuses')->insert($items);
	}

}