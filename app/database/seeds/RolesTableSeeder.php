<?php

// Composer: "fzaninotto/faker": "v1.3.0"
//use Faker\Factory as Faker;

class RolesTableSeeder extends Seeder {

	public function run()
	{
		 DB::table('roles')->delete();


		$items = array(
			['name'=>'user'],
			['name'=>'member'],
			['name'=>'admin'],
			['name'=>'owner']
			);

	// Uncomment the below to run the seeder
		 DB::table('roles')->insert($items);
	}

}