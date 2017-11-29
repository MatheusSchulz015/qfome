<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCiSessionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ci_sessions', function(Blueprint $table)
		{
			$table->string('id', 40)->nullable();
			$table->string('ip_address', 45)->nullable();
			$table->integer('timestamp')->unsigned()->nullable()->default(0)->index('ci_sessions_timestamp');
			$table->binary('data', 65535)->nullable();
			$table->string('session_id', 40)->nullable();
			$table->text('user_agent', 65535)->nullable();
			$table->text('last_activity', 65535)->nullable();
			$table->text('user_data', 65535)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ci_sessions');
	}

}
