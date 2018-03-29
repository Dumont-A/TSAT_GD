<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRencontreUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rencontre_users', function(Blueprint $table)
		{
			$table->boolean('valide');
			$table->boolean('resultat')->nullable();
			$table->text('score', 65535)->nullable();
			$table->integer('id');
			$table->integer('rencontre_id')->index('FK_rencontre_user_id_rencontre');
			$table->integer('user_id')->index('FK_user_rencontre_id_user');
			$table->primary('id');
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
		Schema::drop('rencontre_users');
	}

}
