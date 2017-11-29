<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePratoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('prato', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('restaurante_id');
			$table->string('nome');
			$table->string('tipo');
			$table->string('arroz', 300)->nullable();
			$table->string('feijao', 300)->nullable();
			$table->text('ingredientes')->nullable();
			$table->text('observacao', 65535)->nullable();
			$table->string('img_url', 300)->nullable();
			$table->string('flag_refeicao_montada')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('prato');
	}

}
