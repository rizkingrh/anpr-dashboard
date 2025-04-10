<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        User::create([
            'name' => 'Rizki Nugraha',
            'username' => 'admin',
            'password' => bcrypt('admin'),
            'role' => 'admin',
        ]);
    }
}
