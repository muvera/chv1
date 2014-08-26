<?php

// Composer: "fzaninotto/faker": "v1.3.0"
//use Faker\Factory as Faker;

class ShippingsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		 DB::table('shippings')->delete();

		$items = array(
			// UPLOADS
			// 1
['name'=>'Regular', 'description'=>'3-5 days', 'user_cost'=>'6.50', 'admin_cost'=>'3.00'],
['name'=>'Priority', 'description'=>'2-3 days', 'user_cost'=>'9.00', 'admin_cost'=>'5.00'],
['name'=>'Overnight', 'description'=>'Next Day', 'user_cost'=>'24.99', 'admin_cost'=>'18.00'],

		);	

		// Uncomment the below to run the seeder
		 DB::table('shippings')->insert($items);
	}

}