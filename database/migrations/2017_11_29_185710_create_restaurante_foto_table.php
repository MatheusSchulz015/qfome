<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRestauranteFotoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('restaurante_foto', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('restaurante_id');
			$table->string('nome', 200);
			$table->text('img_url');
			$table->string('flag_capa', 3)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('restaurante_foto');
	}

}
