<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSousMenusTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sous_menus', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('titre');
			$table->text('contenu', 65535)->nullable();
			$table->string('slug')->nullable();
			$table->integer('menu_id')->index('FK_sous_menus_id_menu');
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
		Schema::drop('sous_menus');
	}

}
