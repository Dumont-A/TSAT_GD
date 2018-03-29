<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddActifAlbum extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
        Schema::table('albums', function(Blueprint $table)
         {
             $table->boolean('actif')->default(1);
         });
     }

     /**
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {
          Schema::table('albums', function(Blueprint $table)
         {

         $table->dropColumn('actif');
         });
     }
}
