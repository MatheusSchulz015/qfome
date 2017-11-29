<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEnderecoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('endereco', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('restaurante_id');
			$table->text('endereco', 65535);
			$table->string('numero', 400);
			$table->string('complemento', 400)->nullable();
			$table->text('cidade', 65535);
			$table->string('estado', 200);
			$table->text('bairro', 65535);
			$table->string('cep');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('endereco');
	}

}
