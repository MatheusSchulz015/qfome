<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCardapioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cardapio', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('restaurante_id');
			$table->string('nome');
			$table->string('tipo');
			$table->text('ingredientes')->nullable();
			$table->text('observacao', 65535)->nullable();
			$table->decimal('preco', 10);
			$table->string('img_url', 300)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cardapio');
	}

}
