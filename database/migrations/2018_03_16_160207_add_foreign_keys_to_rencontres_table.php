<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToRencontresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('rencontres', function(Blueprint $table)
		{
			$table->foreign('album_id', 'FK_rencontres_id_albums')->references('id')->on('albums')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('equipe_id', 'FK_rencontres_id_equipes')->references('id')->on('equipes')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('rencontres', function(Blueprint $table)
		{
			$table->dropForeign('FK_rencontres_id_albums');
			$table->dropForeign('FK_rencontres_id_equipes');
		});
	}

}
