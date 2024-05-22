<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('third_data', function (Blueprint $table) {
            $table->unsignedSmallInteger('third_data_id', true);
            $table->unsignedTinyInteger('id_document_type')->nullable();
            $table->foreign('id_document_type')->references('document_type_id')->on('document_types')->onDelete('set null');
            $table->string('identification_number', 12);
            $table->string('first_name', 30);
            $table->string('last_name', 30);
            $table->string('number_phone', 30);
            $table->dateTime('birth_date');
            $table->unsignedTinyInteger('id_gender')->nullable();
            $table->foreign('id_gender')->references('gender_id')->on('genders')->onDelete('set null');
            $table->string('address', 100)->nullable();
            $table->unsignedTinyInteger('id_medical_entity')->nullable();
            $table->foreign('id_medical_entity')->references('medical_entity_id')->on('medical_entities')->onDelete('set null');
            $table->unsignedTinyInteger('id_status')->default('1')->nullable();
            $table->foreign('id_status')->references('status_id')->on('statuses')->onDelete('set null');
            $table->unsignedTinyInteger('id_specialty')->nullable();
            $table->foreign('id_specialty')->references('specialty_id')->on('specialties')->onDelete('set null');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('third_data');
    }
};
