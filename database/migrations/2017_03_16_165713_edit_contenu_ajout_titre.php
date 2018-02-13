<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EditContenuAjoutTitre extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('contenus', function (Blueprint $table) {
            $table->string('titre');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
//
    }

}
