<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrdersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('orders', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('user_id');
			
			$table->string('bill_to');
			$table->string('b_address');
			$table->string('b_address2');
			$table->string('b_city');
			$table->string('b_state');
			$table->string('b_zip');
			$table->string('b_country');
			$table->string('b_phone');

			$table->string('ship_to');
			$table->string('s_address');
			$table->string('s_address2');
			$table->string('s_city');
			$table->string('s_state');
			$table->string('s_zip');
			$table->string('s_country');
			$table->string('s_phone');

			$table->string('amount');
			$table->string('shipping');
			$table->text('items');
			$table->string('status');
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
		Schema::drop('orders');
	}

}
