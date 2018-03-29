<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddOrderSousMenu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::table('sous_menus', function(Blueprint $table) 
        {
            $table->integer('ordre')->nullable();
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
            
        $table->dropColumn('ordre'); 
        });
    }
}
