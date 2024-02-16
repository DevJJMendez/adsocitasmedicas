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
        Schema::create('patients', function (Blueprint $table) {
            $table->smallIncrements('patient_id')->unsigned();

            $table->smallInteger('third_data_id')->unsigned();
            $table->foreign('third_data_id')->references('data_id')->on('thirddatas');

            $table->tinyInteger('entity_id')->unsigned();
            $table->foreign('entity_id')->references('medical_entity_id')->on('medical_entities');

            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
