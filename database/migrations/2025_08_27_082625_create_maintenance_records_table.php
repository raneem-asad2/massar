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
        Schema::create('maintenance_records', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('staff_id')->nullable();
            $table->unsignedBigInteger('robot_id')->nullable();

            $table->date('maintenance_date');
            $table->text('description');
            $table->integer('cost');

            $table->timestamps();

            $table->foreign('staff_id')->references('id')->on('staff');
            $table->foreign('robot_id')->references('id')->on('robots');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maintenance_records');
    }
};
