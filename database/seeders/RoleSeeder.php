<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            ['id' => 1, 'role_name' => 'admin', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'role_name' => 'editor', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'role_name' => 'user', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}