<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSousMenusTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('sous_menus', function(Blueprint $table)
		{
			$table->foreign('id_menu', 'FK_sous_menus_id_menu')->references('id')->on('menu')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('sous_menus', function(Blueprint $table)
		{
			$table->dropForeign('FK_sous_menus_id_menu');
		});
	}

}
