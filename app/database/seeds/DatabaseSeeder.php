<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		// $this->call('UserTableSeeder');
		 $this->call('CategoriesTableSeeder');
		 $this->call('BordersTableSeeder');
		 $this->call('SizesTableSeeder');
		 $this->call('ShippingsTableSeeder');
		 $this->call('ProductsTableSeeder');
		 $this->call('RolesTableSeeder');
		 $this->call('StatusesTableSeeder');
	}

}
