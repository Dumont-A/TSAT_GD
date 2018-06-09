<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatCommentairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('commentaires', function(Blueprint $table)
      {
        $table->integer('id', true);
  			$table->text('contenu', 65535);
  			$table->string('titre');
        $table->string('pseudo')->default('ANONYME');
        $table->integer('news_id')->index('FK_commentaires_id_news');
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
      {
        Schema::drop('commentaires');
      }
    }
}
