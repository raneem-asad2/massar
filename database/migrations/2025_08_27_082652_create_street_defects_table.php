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
        Schema::create('street_defects', function (Blueprint $table) {
            $table->id();
            $table->string( 'defect_type');
            $table->text( 'location');
            $table->string( 'image');
            $table->string( 'status');

            $table->unsignedBigInteger( 'segment_id')->nullable();
            $table->timestamps();

            $table->foreign('segment_id')->references('id')->on('road_segments');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('street_defects');
    }
};
