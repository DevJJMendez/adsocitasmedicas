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
        Schema::create('appointments', function (Blueprint $table) {
            $table->smallIncrements('appointment_id')->unsigned();

            $table->smallInteger('patient')->unsigned();
            $table->foreign('patient')->references('patient_id')->on('patients');

            
            $table->tinyInteger('specialty')->unsigned();
            $table->foreign('specialty')->references('specialty_id')->on('specialties');

            $table->tinyInteger('doctor')->unsigned();
            $table->foreign('doctor')->references('doctor_id')->on('doctors');

            $table->text('medical_evaluation');
            $table->dateTime('appointment_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
