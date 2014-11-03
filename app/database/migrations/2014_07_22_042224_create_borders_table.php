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
			$table->string('alias_name');
			$table->string('alias_img');
			$table->string('name');
			$table->text('description');
			$table->string('file');
			$table->string('make');
			// ADDED FIELDSAmazon Requires
			$table->string('img');
			$table->string('type');
			$table->string('link');
			$table->string('sku');
			$table->string('price');
			$table->string('upc');
			$table->string('brand');
			$table->string('weight');
			$table->string('width');
			$table->string('height');
			$table->string('condition');
			$table->string('ingredients');
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
