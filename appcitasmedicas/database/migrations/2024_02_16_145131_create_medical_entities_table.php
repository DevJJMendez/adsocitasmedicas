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
        Schema::create('medical_entities', function (Blueprint $table) {
            $table->tinyIncrements('medical_entity_id');

            $table->smallInteger('third_data_id')->unsigned()->nullable();
            $table->foreign('third_data_id')->references('data_id')->on('thirddatas');
                   
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('medical_entities');
    }
};
