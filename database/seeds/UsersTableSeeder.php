<?php

use Illuminate\Database\Seeder;
use App\User; // On charge le model User	


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
      {
    User::create([
      'name' => 'Admin',
      'email' => 'admin@test.fr',
      'password' => bcrypt('admin') // On crypte le mode de passe avant insertion dans la base
    ]);
  }
}
