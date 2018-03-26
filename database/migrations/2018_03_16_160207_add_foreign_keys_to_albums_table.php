<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAlbumsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('albums', function(Blueprint $table)
		{
			$table->foreign('id_rencontres', 'FK_albums_id_rencontres')->references('id')->on('rencontres')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_tournois', 'FK_albums_id_tournois')->references('id')->on('tournois')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('albums', function(Blueprint $table)
		{
			$table->dropForeign('FK_albums_id_rencontres');
			$table->dropForeign('FK_albums_id_tournois');
		});
	}

}
