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
        Schema::create('doctors', function (Blueprint $table) {
            $table->tinyIncrements('doctor_id')->unsigned();

            $table->smallInteger('third_data_id')->unsigned();
            $table->foreign('third_data_id')->references('data_id')->on('thirddatas');

            $table->tinyInteger('specialty')->unsigned();
            $table->foreign('specialty')->references('specialty_id')->on('specialties');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
