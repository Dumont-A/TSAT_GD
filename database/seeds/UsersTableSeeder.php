<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
          'nom' => 'admin',
          'prenom'=> 'admin',
          'email' => 'admin@gmail.com',
          'password' => bcrypt('admin'),
          'est_admin' => 1,
          'valider'=>1,
      ]);
      DB::table('users')->insert([
          'nom' => 'joueur',
          'prenom'=> 'joueur',
          'email' => 'joueur@gmail.com',
          'password' => bcrypt('joueur'),
          'est_joueur' => 1,
          'valider'=>1,
      ]);
      DB::table('users')->insert([
          'nom' => 'arbitre',
          'prenom'=> 'arbitre',
          'email' => 'arbitre@gmail.com',
          'password' => bcrypt('arbitre'),
          'est_arbitre' => 1,
          'valider'=>1,
      ]);
      DB::table('users')->insert([
          'nom' => 'invite',
          'prenom'=> 'invite',
          'email' => 'invite@gmail.com',
          'password' => bcrypt('invite'),
          'valider'=>1,
      ]);
    }
}
