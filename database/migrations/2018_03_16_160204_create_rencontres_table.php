<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRencontresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rencontres', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->date('dte');
			$table->dateTime('heure')->nullable();
			$table->string('lieu');
			$table->string('victoire')->nullable();
			$table->integer('equipe_id')->index('FK_rencontres_id_equipes');
			$table->integer('album_id')->index('FK_rencontres_id_albums');
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
		Schema::drop('rencontres');
	}

}
