<?php

use Illuminate\Database\Seeder;

class ContenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('menu')->insert([
          'titre' => 'Le club',
          'slug' => 'le-club',
      ]);
      DB::table('menu')->insert([
          'titre' => 'Infos Pratique',
          'slug' => 'info-pratique',
      ]);
      DB::table('menu')->insert([
          'titre' => 'L'/'enseignement',
          'slug' => 'l-enseignement',
      ]);
      DB::table('sous_menus')->insert([
          'titre' => 'Historique',
          'contenu'=> null,
          'slug' => 'historique',
          'id_menu' => 1,
      ]);
      DB::table('sous_menus')->insert([
          'titre' => 'Installations',
          'contenu'=> null,
          'slug' => 'installations',
          'id_menu' => 1,
      ]);
      DB::table('sous_menus')->insert([
          'titre' => 'Horraires',
          'contenu'=> null,
          'slug' => 'horraires',
          'id_menu' => 1,
      ]);
      DB::table('sous_menus')->insert([
          'titre' => 'Tarifs',
          'contenu'=> null,
          'slug' => 'tarifs',
          'id_menu' => 1,
      ]);
      DB::table('sous_menus')->insert([
          'titre' => 'Equipe pédagogique',
          'contenu'=> null,
          'slug' => 'l-equipe-pedagogique',
          'id_menu' => 1,
      ]);
      DB::table('sous_menus')->insert([
          'titre' => 'Ecole de tennis',
          'contenu'=> null,
          'slug' => 'l-ecole-de-tennis',
          'id_menu' => 1,
      ]);
      DB::table('sous_menus')->insert([
          'titre' => 'Cours collectifs',
          'contenu'=> null,
          'slug' => 'cours-colectifs',
          'id_menu' => 1,
      ]);
      DB::table('sous_menus')->insert([
          'titre' => 'Les stages',
          'contenu'=> null,
          'slug' => 'les-stages',
          'id_menu' => 1,
      ]);

    }
}
