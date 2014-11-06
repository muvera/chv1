<?php

// Composer: "fzaninotto/faker": "v1.3.0"
//use Faker\Factory as Faker;

class ArticlesTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		 DB::table('articles')->delete();

		$items = array(
['title'=>'What is the right cake size?', 'body'=>'The most common cake size is the 1/4 sheet and the 8 inch circle cake. A Full sheet cake will feed about 60-100 people, a Half Sheet 30-60 people and a Quarter Sheet 10-25 people. 8inch Circle will feed about 10-15 people and a 12 Inch will get you 20-30 if your slices are not to big.', 'img'=>'cake-sizes.jpg'],
['title'=>'What frosting to use for Edible Cake Images?', 'body'=>'You may use butter cream, royal icing, moose, fondant and other popular forms of icing. It can also be applied in chocolate, marshmallow, rice treats, cookie, flan and other similar surfaces. For dry surfaces like royal icing and fondant brush with water, icing or chocolate to secure the cake image.', 'img'=>'frosting-for-edible-images.jpg'],
['title'=>'What is the shelf life of Cake Images?', 'body'=>'Shelf life for edible images are about 6 to 8 months if you keep them in the following conditions. Room temperature, No sun light and Cool place like kitchen cabinets.', 'img'=>'shelf-life.jpg'],
['title'=>'What are Edible images?', 'body'=>'Edible photos also know as Cake Images, Edible Decals, Edible Decals, Cake Stickers, Edible Pictures are sugar prints made with edible materials and food coloring. Images are designed with a third party software such as PhotoShop or can be directly scanned. Photo Cakes started to get popularity in the late 90s and latter became main stream with character licensing by Disney, NFL, Movies, TV Shows, Video Games and other entreatment image categories.', 'img'=>'what-are-edible-images.jpg'],
['title'=>'What is an Edible Image Printer?', 'body'=>'An edible printer is simply a printer with food coloring cartridges. Edible Ink manufactures choose printers that have detachable printing heads for cleaning purposes and printing cartridges that are easily reprogrammable for continuous usage. Some of this printers are Canon & Epson printers that are usually $200 - $300 USD. A study conducted in 2009 by Gogo Cake estimates the life time of this printers is about from 1 to 3 months depending on printing habits. The less you print the more it brakes. Gogo Cake does not use or endorse the usage of this printers. Contact us for the full report before you buy a printer.', 'img'=>'edible-printers.jpg'],
['title'=>'What are Edible Image Cutters?', 'body'=>'An edible cutter is a machine that cuts complex shapes with precession for your cake decorations or other edible projects. There are a hand full manufactures with open software design that will allow you to program the cutter machine directly from a desktop. You must calibrate your cutter to cut edible paper if you wish to do so. This machines where designed to cut papers and fabric.', 'img'=>'edible-cutters.jpg'],
		);

		// Uncomment the below to run the seeder
		 DB::table('articles')->insert($items);
	}

}


