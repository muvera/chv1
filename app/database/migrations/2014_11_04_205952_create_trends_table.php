<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrendsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trends', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title');
			$table->string('icons');
			$table->string('youtube_video');
			$table->string('youtube_views');
			$table->string('shazam_position');
			$table->string('explicity_score');
			$table->string('age');
			$table->string('gender');
			$table->text('body');
			$table->string('img');

			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('trends');
	}

}
