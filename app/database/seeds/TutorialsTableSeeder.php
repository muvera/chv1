<?php

// Composer: "fzaninotto/faker": "v1.3.0"
//use Faker\Factory as Faker;

class TutorialsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		 DB::table('tutorials')->delete();

		$items = array(

['title'=>'Icing a Cake', 'body'=>'Inspired by the Sia Chandelier Video', 'img'=>'icing-a-cake.jpg', 'st1'=>'',  'st2'=>'', 'st3'=>'', 'st4'=>'', 'st5'=>''],
['title'=>'Storing a Edible Image', 'body'=>'You may keep your image in a cool dark place away from the sunlight. Keep the image in its plastic baggie until you are ready to use it. If you need to inspect your order, please close the bag properly. If left outside or exposed to air and sun, your image will dry, fade or become brittle.', 'img'=>'store-edible-images.jpg', 'st1'=>'',  'st2'=>'', 'st3'=>'', 'st4'=>'', 'st5'=>''],
['title'=>'Create Edible Photos', 'body'=>'Hipster shirt fabric that captures a liberalistic and organic oriented lifestyle in reference of the Tove Lo', 'img'=>'create-edible-photos.jpg', 'st1'=>'',  'st2'=>'', 'st3'=>'', 'st4'=>'', 'st5'=>''],
['title'=>'Easy Edible Photo Collage', 'body'=>'An insight to a more diverse and cultually aceptable idea of the after life.', 'img'=>'easy-edible-photo-collage.jpg', 'st1'=>'',  'st2'=>'', 'st3'=>'', 'st4'=>'', 'st5'=>''],
['title'=>'Photo Cupcake Circles', 'body'=>'Ballon Man from disney depicts a concept from our frame of reference', 'img'=>'photo-cupcake-circles.jpg', 'st1'=>'',  'st2'=>'', 'st3'=>'', 'st4'=>'', 'st5'=>''],
['title'=>'Oreo Cookie Edible Images', 'body'=>'A strong fasination with characters such as the woman with 2 heads as shown on the TV show series American Horror Storie', 'img'=>'oreo-cookie-edible-images.jpg', 'st1'=>'',  'st2'=>'', 'st3'=>'', 'st4'=>'', 'st5'=>''],
['title'=>'Easy Birthday Cakes', 'body'=>'All year round a zoombie is always welcome specially if it comes out of the Walking Dead TV series', 'img'=>'easy-birthday-cakes.jpg', 'st1'=>'',  'st2'=>'', 'st3'=>'', 'st4'=>'', 'st5'=>''],
['title'=>'How to apply the Edible Image?', 'body'=>'The edible cake sticker comes with vinyl backing that allows you to peel it off like a sticker or decal. You should have your cake frosted and ready before, peel off and place the cake sticker on top. You will not be able to move the cake sticker from its original place.', 'img'=>'apply-the-image.jpg', 'st1'=>'',  'st2'=>'', 'st3'=>'', 'st4'=>'', 'st5'=>''],

		);

		// Uncomment the below to run the seeder
		 DB::table('tutorials')->insert($items);
	}

}