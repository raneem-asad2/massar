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
        DB::table('roles')->updateOrInsert(
            ['id' => 1],
            ['role_name' => 'admin', 'updated_at' => now(), 'created_at' => now()]
        );

        DB::table('roles')->updateOrInsert(
            ['id' => 2],
            ['role_name' => 'editor', 'updated_at' => now(), 'created_at' => now()]
        );

        DB::table('roles')->updateOrInsert(
            ['id' => 3],
            ['role_name' => 'user', 'updated_at' => now(), 'created_at' => now()]
        );
    }
}