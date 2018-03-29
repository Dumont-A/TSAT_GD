<?php

use Illuminate\Database\Seeder;

class ContenuSeederPlus extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('sous_menus')->insert([
          'titre' => 'Coordonnées',
          'contenu'=> null,
          'slug' => 'coordonnees',
          'menu_id' => 7,
          'ordre' => 1,
      ]);
      DB::table('sous_menus')->insert([
          'titre' => 'Nous contacter',
          'contenu'=> null,
          'slug' => 'contacter',
          'menu_id' => 7,
          'ordre' => 2,
      ]);
      DB::table('sous_menus')->insert([
          'titre' => 'Plan d\'accès',
          'contenu'=> null,
          'slug' => 'plan',
          'menu_id' => 7,
          'ordre' => 3,
      ]);
    }
}
