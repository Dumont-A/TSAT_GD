<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddOfreignKeysToCommentaire extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('commentaires', function(Blueprint $table)
      {
        $table->foreign('news_id', 'FK_commentaires_id_news')->references('id')->on('news')->onUpdate('RESTRICT')->onDelete('RESTRICT');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('commentaires', function(Blueprint $table)
      {
        $table->dropForeign('FK_commentaires_id_news');
      });
    }
}
