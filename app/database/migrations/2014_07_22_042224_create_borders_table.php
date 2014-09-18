<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBordersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('borders', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('cat_id');
			$table->string('size_id');
			$table->string('name');
			$table->text('description');
			$table->string('file');
			$table->string('make');
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
		Schema::drop('borders');
	}

}
