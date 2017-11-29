<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRestauranteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('restaurantes', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('empresa_id');
			$table->string('nome');
			$table->string('tipo');
			$table->string('telefone');
			$table->string('celular');
			$table->text('img_url')->nullable();
			$table->string('pedido_url', 400)->nullable();
			$table->text('endereco')->nullable();
			$table->string('flag_pedido_cadastrado', 3)->nullable();
			$table->string('latitude');
			$table->string('longitude');
			$table->timestamp('data_criacao')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('restaurantes');
	}

}
