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
        Schema::create('phones', function (Blueprint $table) {
            $table->smallIncrements('phone_id')->unsigned();

            $table->smallInteger('third_data_id')->unsigned();
            $table->foreign('third_data_id')->references('data_id')->on('thirddatas');

            $table->tinyInteger('contact_type',false,true);
            $table->foreign('contact_type')->references('detail_id')->on('details');

            $table->tinyInteger('priority_id',false,true);
            $table->foreign('priority_id')->references('detail_id')->on('details');

            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('phones');
    }
};
