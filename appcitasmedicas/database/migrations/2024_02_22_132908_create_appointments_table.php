<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->smallIncrements('appointment_id')->unsigned();
            $table->smallInteger('id_patient')->unsigned();
            $table->foreign('id_patient')->references('id')->on('users');
            $table->tinyInteger('id_specialty')->unsigned();
            $table->foreign('id_specialty')->references('specialty_id')->on('specialties');
            $table->smallInteger('id_doctor')->unsigned();
            $table->foreign('id_doctor')->references('id')->on('users');
            $table->dateTime('appointment_date');
            $table->text('medical_evaluation')->nullable();
            $table->tinyInteger('statu_id')->unsigned()->default(3);
            $table->string('statu_type_id')->default('1');
            // $table->enum('status', ['scheduled', 'cancelled', 'postponed']);
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
