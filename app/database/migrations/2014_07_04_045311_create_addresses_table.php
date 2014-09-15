<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAddressesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('addresses', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id');
			$table->string('company');
			$table->string('name');
			$table->string('last');
			$table->string('phone');
			$table->string('address');
			$table->string('apt');
			$table->string('city');
			$table->string('zip');
			$table->string('state');
			$table->string('country');
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
		Schema::drop('addresses');
	}

}
