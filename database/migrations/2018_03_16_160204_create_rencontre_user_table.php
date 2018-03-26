<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRencontreUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rencontre_user', function(Blueprint $table)
		{
			$table->boolean('valide');
			$table->boolean('resultat')->nullable();
			$table->text('score', 65535)->nullable();
			$table->integer('id');
			$table->integer('id_rencontres')->index('FK_rencontre_user_id_rencontres');
			$table->primary(['id','id_rencontres']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('rencontre_user');
	}

}
