<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePartenairesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('partenaires', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('nom');
			$table->string('site');
			$table->string('logo');
			$table->string('telephone', 25);
			$table->string('mail');
			$table->string('adresse');
			$table->string('code_postal');
			$table->string('ville');
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
		Schema::drop('partenaires');
	}

}
