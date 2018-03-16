<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('nom');
			$table->string('prenom');
			$table->string('mail');
			$table->string('telephone');
			$table->string('password');
			$table->boolean('est_arbritre');
			$table->boolean('est_joueur');
			$table->boolean('est_admin');
			$table->string('photo')->nullable();
			$table->integer('id_statuts')->nullable()->index('FK_users_id_statuts');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
