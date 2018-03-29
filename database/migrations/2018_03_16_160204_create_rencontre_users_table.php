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
			$table->integer('id_rencontres')->index('FK_rencontre_user_id_rencontres');
			$table->primary(['id','id_rencontres']);
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
