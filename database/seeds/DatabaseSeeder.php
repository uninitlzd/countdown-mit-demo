<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        DB::table('users')->insert([
          'name' => 'edo',
          'email' => 'alfredo@gmail.com',
          'password' => bcrypt('rahasia')
        ]);
        // $this->call(UsersTableSeeder::class);
    }
}
