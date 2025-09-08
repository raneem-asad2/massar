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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string( column: 'project_name');
            $table->string( 'status');
            $table->unsignedBigInteger('robot_id')->nullable();
            $table->unsignedBigInteger('staff_id')->nullable();

            $table->date('assignment_date');
            $table->date( 'completion_date')->nullable();
            
            $table->timestamps();

            $table->foreign('robot_id')->references('id')->on('robots');
            $table->foreign('staff_id')->references('id')->on('staff');
        });

       
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
