<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAlbumsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('albums', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('titre');
			$table->text('description', 65535)->nullable();
			$table->integer('tournoi_id')->index('FK_albums_id_tournois')->nullable();
			$table->integer('rencontre_id')->index('FK_albums_id_rencontres')->nullable();
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
		Schema::drop('albums');
	}

}
