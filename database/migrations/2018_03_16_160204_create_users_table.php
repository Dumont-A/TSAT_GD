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
			$table->string('email');
			$table->string('telephone')->nullable();
			$table->string('password');
			$table->string('commentaire')->nullable();
			$table->boolean('est_arbitre')->default(0);
			$table->boolean('est_joueur')->default(0);
			$table->boolean('est_admin')->default(0);
			$table->boolean('valider')->default(0);
			$table->string('photo')->nullable();
			$table->integer('statut_id')->nullable()->index('FK_users_id_statuts');
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
		Schema::drop('users');
	}

}
