<?php

// Composer: "fzaninotto/faker": "v1.3.0"
//use Faker\Factory as Faker;

class BordersTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		 DB::table('borders')->delete();

		$items = array(
['cat_id'=>'1', 'size_id'=>'1','name'=>'1/4 Sheet Photo Image', 'description'=>'1/4 Sheet 10x7.5', 'file'=>'10x7_5.png'],
['cat_id'=>'1', 'size_id'=>'1','name'=>'Logo Edible Cake Image', 'description'=>'8x6 inch edible image', 'file'=>'8x6.png'],
['cat_id'=>'1', 'size_id'=>'1','name'=>'Middle Image Photo Cake', 'description'=>'6x4.5 inch edible image', 'file'=>'6x4_5.png'],

['cat_id'=>'2', 'size_id'=>'1','name'=>'7 inch edible image', 'description'=>'7 Inch round edible cake image', 'file'=>'7inch.png'],
['cat_id'=>'2', 'size_id'=>'1','name'=>'6 inch edible image', 'description'=>'6 Inch round edible cake image', 'file'=>'6inch.png'],
['cat_id'=>'2', 'size_id'=>'1','name'=>'5 inch edible image', 'description'=>'5 Inch round edible cake image', 'file'=>'5inch.png'],

['cat_id'=>'3', 'size_id'=>'1','name'=>'Balloons', 'description'=>'Birthday Border 1', 'file'=>'1.png'],
['cat_id'=>'3', 'size_id'=>'1','name'=>'Happy Balloons', 'description'=>'Birthday Border 2', 'file'=>'2.png'],
['cat_id'=>'3', 'size_id'=>'1','name'=>'Fiesta Balloons', 'description'=>'Birthday Border 3', 'file'=>'3.png'],
['cat_id'=>'3', 'size_id'=>'1','name'=>'Kids Balloons', 'description'=>'Birthday Border 4', 'file'=>'4.png'],
['cat_id'=>'3', 'size_id'=>'1','name'=>'Party Balloons', 'description'=>'Birthday Border 5', 'file'=>'5.png'],
['cat_id'=>'3', 'size_id'=>'1','name'=>'Party Balloons', 'description'=>'Birthday Border 5', 'file'=>'6.png'],
['cat_id'=>'3', 'size_id'=>'1','name'=>'Party Balloons', 'description'=>'Birthday Border 5', 'file'=>'7.png'],
['cat_id'=>'3', 'size_id'=>'1','name'=>'Party Balloons', 'description'=>'Birthday Border 5', 'file'=>'8.png'],
['cat_id'=>'3', 'size_id'=>'1','name'=>'Party Balloons', 'description'=>'Birthday Border 5', 'file'=>'9.png'],
['cat_id'=>'3', 'size_id'=>'1','name'=>'Party Balloons', 'description'=>'Birthday Border 5', 'file'=>'10.png'],
['cat_id'=>'3', 'size_id'=>'1','name'=>'Party Balloons', 'description'=>'Birthday Border 5', 'file'=>'11.png'],
['cat_id'=>'3', 'size_id'=>'1','name'=>'Party Balloons', 'description'=>'Birthday Border 5', 'file'=>'12.png'],






		);

		// Uncomment the below to run the seeder
		 DB::table('borders')->insert($items);
	}

}