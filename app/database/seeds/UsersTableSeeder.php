<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			//pass: admin123
			User::create([

				'username'=>'muvera', 'email'=>'muvera@gmail.com', 'password'=>'$2y$10$0yw6k0Kj3dTXr8MBRHJlY.dau8aPLDmxBPuniUU/5hGWrOLAs2X/K'
			]);
		}
	}

}