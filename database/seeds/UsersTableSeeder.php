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
      ]);
    }
}
