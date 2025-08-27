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
        Schema::create('road_segments', function (Blueprint $table) {
            $table->id();
            $table->string( 'segment_name');
            $table->string( 'status');
            $table->string( 'line_type');
            $table->string( 'start_coordinates');
            $table->string( 'end_coordinates');
            $table->text(  'description');

            $table->unsignedBigInteger( 'project_id')->nullable();
            $table->timestamps();

            $table->foreign( 'project_id')->references('id')->on('projects');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('road_segments');
    }
};
