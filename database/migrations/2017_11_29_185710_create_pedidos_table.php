<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePedidosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pedidos', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('cardapio_id');
			$table->integer('usurarios_id');
			$table->decimal('valor', 10);
			$table->decimal('taxa_entrega', 10);
			$table->string('nome')->nullable();
			$table->string('email');
			$table->text('observacao')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pedidos');
	}

}
