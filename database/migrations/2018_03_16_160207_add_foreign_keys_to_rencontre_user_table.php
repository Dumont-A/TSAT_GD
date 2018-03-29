<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToRencontreUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('rencontre_users', function(Blueprint $table)
		{
			$table->foreign('user_id', 'FK_rencontre_user_id')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('rencontre_id', 'FK_rencontre_user_id_rencontres')->references('id')->on('rencontres')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('rencontre_users', function(Blueprint $table)
		{
			$table->dropForeign('FK_rencontre_user_id');
			$table->dropForeign('FK_rencontre_user_id_rencontres');
		});
	}

}
