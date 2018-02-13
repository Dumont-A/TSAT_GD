<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRencontresUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rencontre_user', function (Blueprint $table) {
         
            $table->increments('id');
            $table->integer('rencontre_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->boolean('confirmation')->default(false);
            $table->boolean('gagner')->nullable();
            $table->string('score')->nullable();
            $table->timestamps();
            $table->engine="INNODB";
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rencontre_user');
    }
}
