<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTournoisTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tournois', function(Blueprint $table)
		{
			$table->foreign('album_id', 'FK_tournois_id_albums')->references('id')->on('albums')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tournois', function(Blueprint $table)
		{
			$table->dropForeign('FK_tournois_id_albums');
		});
	}

}
