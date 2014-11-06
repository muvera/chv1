<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class TrendsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		 DB::table('trends')->delete();

		$items = array(

['title'=>'Leotard Cupcakes', 'icons'=>'Chandelier, Blonde wig, ballerina', 'youtube_video'=>'//www.youtube.com/embed/2vjPBrBU-TM', 'youtube_views'=>'286,749,819', 'shazam_position'=>'no data', 'explicity_score'=>'3', 'age'=>'16+', 'gender'=>'Female', 'body'=>'Inspired by the Sia Chandelier Video. Leotards are use by girls and women for cardio vascular exercises and dance. It is also a iconic part of the gymnastics community where teams use them to execute their abilities and at the same time sport the flag colors of their host country. You can create designs with different colors and poses for cupcakes or cookies. Leotard party treats can make a great gift or favor. Leotard designs can make a complementary side pastry or part of a party dance theme.', 'img'=>'leotard-cupcakes.jpg'],
['title'=>'Barbie Dolls', 'icons'=>'Pink, Pastels, Barbie Doll, Ken, Tea table, Blonde Wig', 'youtube_video'=>'//www.youtube.com/embed/7PCkvCPvDXk', 'youtube_views'=>'223,891,089', 'shazam_position'=>'no data', 'explicity_score'=>'3', 'age'=>'16+', 'gender'=>'Female',  'body'=>'As seen on the Megahn Trainor Video', 'img'=>'barbie-tea-table-cake.jpg'],
['title'=>'Plaid', 'icons'=>'Mens Shirt, Subway, New York, Liquor, Beer', 'youtube_video'=>'//www.youtube.com/embed/SYM-RJwSGQ8', 'youtube_views'=>'39,999,191', 'shazam_position'=>'no data', 'explicity_score'=>'6', 'age'=>'16+', 'gender'=>'Female',  'body'=>'Hipster shirt fabric that captures a liberalistic and organic oriented lifestyle in reference of the Tove Lo', 'img'=>'christmas-plaid-cake.jpg'],
['title'=>'Flower Skulls', 'icons'=>'Skulls, Hats, Bulls, Snake, Book', 'youtube_video'=>'//www.youtube.com/embed/NBw5YScs8iQ', 'youtube_views'=>'2,456,918', 'shazam_position'=>'no data', 'explicity_score'=>'1', 'age'=>'1+', 'gender'=>'Unisex',  'body'=>'An insight to a more diverse and cultually aceptable idea of the after life.', 'img'=>'skull-cake-images.jpg'],
['title'=>'Superhero', 'icons'=>'Ballon men, Flying Suit, Computer, Kabuki Mask, Cat', 'youtube_video'=>'//www.youtube.com/embed/z3biFxZIJOQ', 'youtube_views'=>'6,343,076', 'shazam_position'=>'no data', 'explicity_score'=>'1', 'age'=>'1+', 'gender'=>'Unisex',  'body'=>'Ballon Man from disney depicts a concept from our frame of reference', 'img'=>'big-hero-6-cookies.jpg'],
['title'=>'Twins', 'icons'=>'2 Heads, Short People, Kife, Circus', 'youtube_video'=>'//www.youtube.com/embed/qKGwySm9nMc', 'youtube_views'=>'1,473,340', 'shazam_position'=>'no data', 'explicity_score'=>'9', 'age'=>'18+', 'gender'=>'Unisex',  'body'=>'A strong fasination with characters such as the woman with 2 heads as shown on the TV show series American Horror Storie', 'img'=>'american-horror-story-cake.jpg'],
['title'=>'Zombies', 'icons'=>'Town, Hospital, Guns, Blood', 'youtube_video'=>'//www.youtube.com/embed/j4GAs9TJVjM', 'youtube_views'=>'12,245,299', 'shazam_position'=>'no data', 'explicity_score'=>'9', 'age'=>'18+', 'gender'=>'Male',  'body'=>'All year round a zoombie is always welcome specially if it comes out of the Walking Dead TV series', 'img'=>'zombie-image-cake.jpg'],
['title'=>'Call of Duty', 'icons'=>'Guns, kevin spacey, war, weapons, army, explosions', 'youtube_video'=>'//www.youtube.com/embed/GccGbdLqTmQ', 'youtube_views'=>'16,260,770', 'shazam_position'=>'no data', 'explicity_score'=>'9', 'age'=>'16+', 'gender'=>'Male',  'body'=>'Jonathan Irons is a key character and head of the Atlas Corporation. Wepon of choice is the Atlas 45', 'img'=>'call-of-duty-advanced.jpg'],

		);

		// Uncomment the below to run the seeder
		 DB::table('trends')->insert($items);
	}

}