<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTournoisTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tournois', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->date('dte_debut');
			$table->date('dte_fin');
			$table->date('dte_fin_inscription');
			$table->string('lien_site')->nullable();
			$table->boolean('actif');
			$table->text('resultat', 65535)->nullable();
			$table->integer('album_id')->index('FK_tournois_id_albums');
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
		Schema::drop('tournois');
	}

}
