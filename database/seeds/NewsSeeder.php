<?php

use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert([
          'contenu' => 'test d\'une news',
          'titre'=> 'Titre de la news',
      ]);
    }
}
