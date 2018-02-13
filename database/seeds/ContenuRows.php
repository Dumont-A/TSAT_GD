<?php

use Illuminate\Database\Seeder;

class ContenuRows extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('contenus')->insert([
        ['page' => 'Le_club','ckeditor' => 'Texte','titre' => 'Le club'],
        ['page' => 'La_competition','ckeditor' => 'Texte','titre' => 'La comptition'],
        ['page' => 'Infos_Adherents','ckeditor' => 'Texte','titre' => 'Infos Adhérents'],
        ['page' => 'L_equipe_pedagogique','ckeditor' => 'Texte','titre' => "L'équipe pédagogique"],
        ['page' => 'L_ecole_de_tennis','ckeditor' => 'Texte','titre' => "L'école de tennis"],
        ['page' => 'Les_cours_collectifs_adultes','ckeditor' => 'Texte','titre' => 'Les cours collectifs adultes']
        ]);

    }

}
