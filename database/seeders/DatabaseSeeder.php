<?php

use Illuminate\Database\Seeder;
use App\User;
use Database\Seeders\TenantSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            TenantSeeder::class,
        ]);

        User::create([
            'name' => 'Admin',
            'username' => 'admin',
            'password' => bcrypt('admin'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'User',
            'username' => 'user',
            'password' => bcrypt('user'),
            'role' => 'user',
        ]);
    }
}
