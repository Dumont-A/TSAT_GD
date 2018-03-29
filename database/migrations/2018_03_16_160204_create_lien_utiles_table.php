<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLienUtilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('lien_utiles', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('libelle');
			$table->string('url');
			$table->string('photo');
			$table->boolean('actif');
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
		Schema::drop('lien_utiles');
	}

}
