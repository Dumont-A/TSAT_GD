<?php

use Illuminate\Database\Seeder;

class CommentaireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('commentaires')->insert([
          'contenu' => 'test de commentaire',
          'titre'=> 'commentaire test',
          'news_id' => 1,
      ]);
    }
}
