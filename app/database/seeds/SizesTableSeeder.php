<?php

// Composer: "fzaninotto/faker": "v1.3.0"
//use Faker\Factory as Faker;

class SizesTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		 DB::table('sizes')->delete();

		$items = array(

			// Rectangles Shapes
			['dshape'=>'1', 'cat' => '1' ,'name'=> '10x7.5', 'description'=> 'Quarter Sheet cake image','width'=>'1000', 'height'=>'750', 'base_price'=> '4.99', 'mask'=>'1.png'],
			['dshape'=>'1', 'cat' => '1' ,'name'=> '8x6', 'description'=> 'Quarter Sheet cake image','width'=>'1000', 'height'=>'750', 'base_price'=> '4.99', 'mask'=>'2.png'],
			['dshape'=>'1', 'cat' => '1' ,'name'=> '6x4.5', 'description'=> 'Quarter Sheet cake image','width'=>'1000', 'height'=>'750', 'base_price'=> '4.99', 'mask'=>'3.png'],

			// Round Shapes
			['dshape'=>'2','cat' => '2' ,'name'=> '7', 'description'=> 'Round 7 Inch cake image', 'width'=>'700', 'height'=>'700', 'base_price'=> '4.99', 'mask'=>'4.png'],
			['dshape'=>'2','cat' => '2' ,'name'=> '6', 'description'=> 'Round 6 Inch cake image', 'width'=>'600', 'height'=>'600', 'base_price'=> '4.99', 'mask'=>'5.png'],
			['dshape'=>'2','cat' => '2' ,'name'=> '5', 'description'=> 'Round 5 Inch cake image', 'width'=>'500', 'height'=>'500', 'base_price'=> '4.99', 'mask'=>'6.png'],


			// 2
			['dshape'=>'1','cat' => '1' ,'name'=> '10x15', 'description'=> 'Half Sheet cake Image', 'width'=>'1000', 'height'=>'1500', 'base_price'=> '4.99', 'mask'=>'2.png'],
			// 3
			['dshape'=>'1','cat' => '1' ,'name'=> '20x15', 'description'=> 'Full Sheet cake image', 'width'=>'2000', 'height'=>'1500', 'base_price'=> '4.99', 'mask'=>'3.png'],
			// 7
			['dshape'=>'2','cat' => '2' ,'name'=> '2 of 5', 'description'=> 'Round 5 Inch cake image', 'width'=>'500', 'height'=>'500', 'base_price'=> '4.99', 'mask'=>'7.png'],
			// 8
			['dshape'=>'2','cat' => '2' ,'name'=> '2 of 4', 'description'=> 'Round 5 Inch cake image', 'width'=>'400', 'height'=>'400', 'base_price'=> '4.99', 'mask'=>'8.png'],
			// 9
			['dshape'=>'2','cat' => '2' ,'name'=> '6 of 3', 'description'=> 'Round 5 Inch cake image', 'width'=>'300', 'height'=>'300', 'base_price'=> '4.99', 'mask'=>'9.png'],
			// 10
			['dshape'=>'2','cat' => '2' ,'name'=> '12 of 2', 'description'=> 'Round 5 Inch cake image', 'width'=>'200', 'height'=>'200', 'base_price'=> '4.99', 'mask'=>'10.png'],
			// 11
			['dshape'=>'2','cat' => '2' ,'name'=> '30 of 1.5', 'description'=> 'Round 5 Inch cake image', 'width'=>'150', 'height'=>'150', 'base_price'=> '4.99', 'mask'=>'11.png'],
			// STATIC SIZES START
			// 12
			['dshape'=>'2','cat' => '2' ,'name'=> '7.5', 'description'=> 'Round 7.5 Inch cake image print', 'width'=>'750', 'height'=>'750', 'base_price'=> '4.99', 'mask'=>'12.png'],
			// 13
			['dshape'=>'2','cat' => '2' ,'name'=> '7', 'description'=> 'Round 6 Inch cake image print', 'width'=>'700', 'height'=>'700', 'base_price'=> '4.99', 'mask'=>'13.png'],
			// 14
			['dshape'=>'2','cat' => '2' ,'name'=> '6', 'description'=> 'Round 5 Inch cake image print', 'width'=>'600', 'height'=>'600', 'base_price'=> '4.99', 'mask'=>'14.png'],
			// 15
			['dshape'=>'2','cat' => '2' ,'name'=> '5', 'description'=> 'Round 4 Inch cake image print', 'width'=>'500', 'height'=>'500', 'base_price'=> '4.99', 'mask'=>'15.png'],
			// 16
			['dshape'=>'2','cat' => '2' ,'name'=> '4', 'description'=> 'Round 3 Inch cake image print', 'width'=>'400', 'height'=>'400', 'base_price'=> '4.99', 'mask'=>'16.png'],
			// 17
			['dshape'=>'2','cat' => '2' ,'name'=> '3', 'description'=> 'Round 3 Inch cake image print', 'width'=>'300', 'height'=>'300', 'base_price'=> '4.99', 'mask'=>'17.png'],
			// 18
			['dshape'=>'2','cat' => '2' ,'name'=> '2', 'description'=> 'Round 2 Inch cake image print', 'width'=>'200', 'height'=>'200', 'base_price'=> '4.99', 'mask'=>'18.png'],
			// 19
			['dshape'=>'2','cat' => '2' ,'name'=> '1.5', 'description'=> 'Round 1.5 Inch cake image print', 'width'=>'150', 'height'=>'150', 'base_price'=> '4.99', 'mask'=>'19.png'],
			// 20
			['dshape'=>'2','cat' => '2' ,'name'=> '1', 'description'=> 'Round 1 Inch cake image print', 'width'=>'100', 'height'=>'100', 'base_price'=> '4.99', 'mask'=>'20.png'],
			// 21
			// MARKER Gradiant 7 inch Borders
			['dshape'=>'2','cat' => '2' ,'name'=> '7.5', 'description'=> 'Round 7.5 Inch cake image print', 'width'=>'750', 'height'=>'750', 'base_price'=> '4.99', 'mask'=>'21.png'],
		
			// 22
			// MARKER STRIP
			['dshape'=>'2','cat' => '2' ,'name'=> '2', 'description'=> '2 Inch strip image print', 'width'=>'750', 'height'=>'200', 'base_price'=> '4.99', 'mask'=>'22.png'],
			// 23
			['dshape'=>'2','cat' => '2' ,'name'=> '2.5', 'description'=> '2.5 Inch strip image print', 'width'=>'750', 'height'=>'250', 'base_price'=> '4.99', 'mask'=>'23.png'],
			// 24
			['dshape'=>'2','cat' => '2' ,'name'=> '3', 'description'=> '3 Inch strip image print', 'width'=>'750', 'height'=>'300', 'base_price'=> '4.99', 'mask'=>'24.png'],
			// 25
			['dshape'=>'2','cat' => '2' ,'name'=> '3.5', 'description'=> '3.5 Inch strip image print', 'width'=>'750', 'height'=>'350', 'base_price'=> '4.99', 'mask'=>'25.png'],
			
			// MARKER BOTTOM FADES
			// 26
			['dshape'=>'2','cat' => '2' ,'name'=> '2', 'description'=> '2 Inch strip image fade', 'width'=>'750', 'height'=>'200', 'base_price'=> '4.99', 'mask'=>'22.png'],
			// 27
			['dshape'=>'2','cat' => '2' ,'name'=> '2.5', 'description'=> '2.5 Inch strip image fade', 'width'=>'750', 'height'=>'250', 'base_price'=> '4.99', 'mask'=>'23.png'],
			// 28
			['dshape'=>'2','cat' => '2' ,'name'=> '3', 'description'=> '3 Inch strip image fade', 'width'=>'750', 'height'=>'300', 'base_price'=> '4.99', 'mask'=>'24.png'],
			// 29
			['dshape'=>'2','cat' => '2' ,'name'=> '3.5', 'description'=> '3.5 Inch strip image fade', 'width'=>'750', 'height'=>'350', 'base_price'=> '4.99', 'mask'=>'25.png'],

			// MARKER RECTANGLE SIZES


		);	

		// Uncomment the below to run the seeder
		 DB::table('sizes')->insert($items);
	}

}