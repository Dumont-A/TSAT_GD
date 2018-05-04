<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNullableToTournois extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('tournois', function(Blueprint $table)
       {
           $table->integer('album_id')->nullable()->change();
           $table->integer('actif')->nullable()->change();
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

    $table->integer('album_id')->change();
    $table->integer('actif')->change();
    });
    }
}
