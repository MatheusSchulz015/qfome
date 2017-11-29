<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmpresaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('empresa', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('nome_fantasia');
			$table->string('razao_social')->nullable();
			$table->string('CNPJ')->nullable();
			$table->string('inscricao_estadual', 50)->nullable();
			$table->string('CPF', 20);
			$table->string('telefone', 50);
			$table->string('celular', 50);
			$table->text('password', 65535);
			$table->text('email');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('empresa');
	}

}
