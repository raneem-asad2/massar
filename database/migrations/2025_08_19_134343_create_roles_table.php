<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // 1️⃣ Create roles table
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('role_name')->unique();
            $table->timestamps();
        });

        // 2️⃣ Add role_id to users table
        Schema::table('users', function (Blueprint $table) {
            // Drop the existing 'role' column if it was present and not removed
            // if (Schema::hasColumn('users', 'role')) {
            //     $table->dropColumn('role');
            // }
            $table->foreignId('role_id')->default(3)->constrained('roles');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Drop role_id first
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['role_id']);
            $table->dropColumn('role_id');
        });

        // Then drop roles table
        Schema::dropIfExists('roles');
    }
};