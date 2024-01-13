<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Customers extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('customers')->insert([
            'user_id' => '2',
            'first_name' => 'user',
            'last_name' => '1',
            'phone' => '12345',
            'status' => 'active',
            'created_at' => now(),
            'updated_at' => now(),
            
        ]);
    }
}
