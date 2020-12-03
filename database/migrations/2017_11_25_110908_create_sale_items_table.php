<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSaleItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sale_items', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('sale_id');
			$table->integer('product_id');
			$table->decimal('price');
			$table->integer('quantity');
			$table->integer('p_qty')->default(0);
			$table->string('size', 20)->nullable();
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
		Schema::drop('sale_items');
	}

}
