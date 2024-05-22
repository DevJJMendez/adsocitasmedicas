<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->unsignedMediumInteger('appointment_id', true);
            $table->unsignedSmallInteger('id_patient');
            $table->foreign('id_patient')->references('id')->on('users');
            $table->unsignedTinyInteger('id_specialty');
            $table->foreign('id_specialty')->references('specialty_id')->on('specialties');
            $table->unsignedSmallInteger('id_doctor');
            $table->foreign('id_doctor')->references('id')->on('users');
            $table->dateTime('appointment_date');
            $table->text('medical_evaluation')->nullable();
            $table->unsignedTinyInteger('id_status')->default('3');
            $table->foreign('id_status')->references('status_id')->on('statuses');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
