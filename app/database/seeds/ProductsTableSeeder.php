
<?php

// Composer: "fzaninotto/faker": "v1.3.0"
//use Faker\Factory as Faker;

class ProductsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		 DB::table('products')->delete();


		$items = array(
// Round
	//1
['size_id'=>'1', 'shape_id'=>'1', 'name'=>'10x7.5 inch edible image', 'description'=>'Customized Edible Cake Image for borderless cakes. Decoration covers most standard quarter sheet cakes, apply the 10x7.5 size  before decorative icing borders.', 'video'=>'' ,'price'=>'9.99','special'=>'7.75','rewards'=>'100', 'file'=>'10x7_5.jpg'],
['size_id'=>'2', 'shape_id'=>'1', 'name'=>'8x6 inch edible image', 'description'=>'Personalized Edible Cake Image for cakes with borders. Decoration covers the area after the cake as been decorated for most standard quarter sheet cakes, apply the 8x6 size  if the cake has been decorated.', 'video'=>'' ,'price'=>'9.99','special'=>'7.75','rewards'=>'100', 'file'=>'8x6.jpg'],
['size_id'=>'3 ', 'shape_id'=>'1', 'name'=>'6x4.5 inch edible image', 'description'=>'Edible Cake Image for cakes with borders. Decoration covers the area after the cake as been decorated for most standard quarter sheet cakes, apply the 6x4/5 size  if the cake has been decorated.', 'video'=>'' ,'price'=>'9.99','special'=>'7.75','rewards'=>'100', 'file'=>'6x4_5.jpg'],
['size_id'=>'4', 'shape_id'=>'1', 'name'=>'7 inch edible image', 'description'=>'This is a dummy description', 'video'=>'' ,'price'=>'9.99','special'=>'7.75','rewards'=>'100', 'file'=>'7inch.jpg'],
['size_id'=>'5', 'shape_id'=>'1', 'name'=>'6 inch edible image', 'description'=>'This is a dummy description', 'video'=>'' ,'price'=>'9.99','special'=>'7.75','rewards'=>'100', 'file'=>'6inch.jpg'],
['size_id'=>'6', 'shape_id'=>'1', 'name'=>'5 inch edible image', 'description'=>'This is a dummy description', 'video'=>'' ,'price'=>'9.99','special'=>'7.75','rewards'=>'100', 'file'=>'5inch.jpg']





		);

		// Uncomment the below to run the seeder
		 DB::table('products')->insert($items);
	}

}