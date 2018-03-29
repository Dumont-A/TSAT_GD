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
<<<<<<< HEAD
			$table->integer('id_menu')->index('FK_sous_menus_id_menu');
			$table->timestamps();
=======
			$table->integer('menu_id')->index('FK_sous_menus_menu_id');
>>>>>>> e35dde1ea630bc362fdccb0cd0c1d64293515528
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
