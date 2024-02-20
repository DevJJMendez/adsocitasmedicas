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
        Schema::create('third_data', function (Blueprint $table) {
            $table->smallIncrements('data_id')->unsigned();

            $table->tinyInteger('document_type')->unsigned()->nullable();
            $table->foreign('document_type')->references('detail_id')->on('details');

            $table->string('identification_number',12)->nullable();
            $table->string('nit',9)->nullable();
            $table->string('first_name',30)->nullable();
            $table->string('second_name',30)->nullable();
            $table->string('sur_name',30)->nullable();
            $table->string('second_sur_name',30)->nullable();
            $table->string('number_phone',30)->nullable();
            $table->dateTime('birth_date')->nullable();

            $table->tinyInteger('gender_id',false,true)->nullable();
            $table->foreign('gender_id')->references('detail_id')->on('details');

            
            $table->tinyInteger('entity_type_id')->unsigned()->nullable();
            $table->foreign('entity_type_id')->references('detail_id')->on('details');
            
            $table->string('mail',100)->nullable();
            $table->string('business_name',100)->nullable();
            $table->string('address',100)->nullable();

            $table->tinyInteger('statu_id')->unsigned();
            $table->foreign('statu_id')->references('detail_id')->on('details');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('third_data');
    }
};
