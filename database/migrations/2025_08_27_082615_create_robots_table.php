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
        Schema::create('robots', function (Blueprint $table) {
            $table->id();
            $table->string( 'robot_name');
            $table->tinyInteger(column: 'charge_level');
            $table->tinyInteger(column: 'paint_level');
            $table->string('robot_status');
            $table->string('current_location');
            $table->string(column: 'serial_number')->unique();
            $table->date(column: 'last_maintenance_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('robots');
    }
};
