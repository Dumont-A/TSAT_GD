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
			$table->integer('id_tournois')->index('FK_albums_id_tournois');
			$table->integer('id_rencontres')->index('FK_albums_id_rencontres');
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
