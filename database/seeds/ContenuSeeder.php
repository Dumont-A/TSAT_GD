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
      DB::table('menus')->insert([
          'titre' => 'Le club',
          'slug' => 'club',
      ]);
      DB::table('menus')->insert([
          'titre' => 'Compétition',
          'slug' => 'competition',
      ]);
      DB::table('menus')->insert([
          'titre' => 'Infos Pratiques',
          'slug' => 'info-pratique',
      ]);
      DB::table('menus')->insert([
          'titre' => 'L\'enseignement',
          'slug' => 'l-enseignement',
      ]);
      DB::table('menus')->insert([
          'titre' => 'La galerie',
          'slug' => 'galerie',
      ]);
      DB::table('menus')->insert([
          'titre' => 'Les liens utiles',
          'slug' => 'lien-utiles',
      ]);
      DB::table('menus')->insert([
          'titre' => 'Contact',
          'slug' => 'contact',
      ]);
      DB::table('sous_menus')->insert([
          'titre' => 'Historique',
          'contenu'=> null,
          'slug' => 'historique',
          'menu_id' => 1,
          'ordre' => 1,
      ]);
      DB::table('sous_menus')->insert([
          'titre' => 'Le comité',
          'contenu'=> null,
          'slug' => 'comite',
          'menu_id' => 1,
          'ordre' => 2,
      ]);
      DB::table('sous_menus')->insert([
          'titre' => 'Les installations',
          'contenu'=> null,
          'slug' => 'installations',
          'menu_id' => 1,
          'ordre' => 3,
      ]);
      DB::table('sous_menus')->insert([
          'titre' => 'Les partenaires',
          'contenu'=> null,
          'slug' => 'partenaires',
          'menu_id' => 1,
          'ordre' => 4,
      ]);
      DB::table('sous_menus')->insert([
          'titre' => 'Tournoi',
          'contenu'=> null,
          'slug' => 'tournoi',
          'menu_id' => 2,
          'ordre' => 1,
      ]);
      DB::table('sous_menus')->insert([
          'titre' => 'Equipes',
          'contenu'=> null,
          'slug' => 'equipe',
          'menu_id' => 2,
          'ordre' => 2,
      ]);
      DB::table('sous_menus')->insert([
          'titre' => 'Arbitres',
          'contenu'=> null,
          'slug' => 'arbitres',
          'menu_id' => 2,
          'ordre' => 3,
      ]);
      DB::table('sous_menus')->insert([
          'titre' => 'Résultats',
          'contenu'=> null,
          'slug' => 'resultats',
          'menu_id' => 2,
          'ordre' => 4,
      ]);
      DB::table('sous_menus')->insert([
          'titre' => 'Les horaires',
          'contenu'=> null,
          'slug' => 'horaires',
          'menu_id' => 3,
          'ordre' => 1,
      ]);
      DB::table('sous_menus')->insert([
          'titre' => 'Devenir membre',
          'contenu'=> null,
          'slug' => 'devenir-membre',
          'menu_id' => 3,
          'ordre' => 2,
      ]);
      DB::table('sous_menus')->insert([
          'titre' => 'La réservation',
          'contenu'=> null,
          'slug' => 'reservations',
          'menu_id' => 3,
          'ordre' => 3,
      ]);
      DB::table('sous_menus')->insert([
          'titre' => 'Tarifs',
          'contenu'=> null,
          'slug' => 'tarifs',
          'menu_id' => 3,
          'ordre' => 4,
      ]);
      DB::table('sous_menus')->insert([
          'titre' => 'Equipe pédagogique',
          'contenu'=> null,
          'slug' => 'l-equipe-pedagogique',
          'menu_id' => 4,
          'ordre' => 1,
      ]);
      DB::table('sous_menus')->insert([
          'titre' => 'Ecole de tennis',
          'contenu'=> null,
          'slug' => 'l-ecole-de-tennis',
          'menu_id' => 4,
          'ordre' => 2,
      ]);
      DB::table('sous_menus')->insert([
          'titre' => 'Cours collectifs',
          'contenu'=> null,
          'slug' => 'cours-colectifs',
          'menu_id' => 4,
          'ordre' => 3,
      ]);
      DB::table('sous_menus')->insert([
          'titre' => 'Les stages',
          'contenu'=> null,
          'slug' => 'les-stages',
          'menu_id' => 4,
          'ordre' => 4,
      ]);

    }
}
