<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNullableAlbumIdToRencontre extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
        Schema::table('rencontres', function(Blueprint $table)
         {
             $table->integer('album_id')->nullable()->change();
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

         $table->integer('album_id')->change();
         });
     }
}
