<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
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
            'email' => 'admin@7ammakeyourday.ro',
            'password' => bcrypt('o$lfl]}yK2.S#YPN`]W]'),
            'email_verified_at' => now(),
            'is_admin' => true
        ]);
    }
}
