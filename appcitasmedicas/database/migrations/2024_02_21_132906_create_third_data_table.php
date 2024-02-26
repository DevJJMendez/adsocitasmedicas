<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('third_data', function (Blueprint $table) {
            $table->smallIncrements('data_id')->unsigned();

            // Tipo de documento
            $table->string('document_type_id', 2)->nullable();

            $table->string('identification_number', 12)->nullable();
            $table->string('nit', 9)->nullable();
            $table->string('first_name', 30)->nullable();
            $table->string('second_name', 30)->nullable();
            $table->string('sur_name', 30)->nullable();
            $table->string('second_sur_name', 30)->nullable();
            $table->string('number_phone', 30)->nullable();
            $table->dateTime('birth_date')->nullable();

            // Tipo de genero
            $table->string('gender_type_id')->nullable();


            // Tipo de entidad medica
            $table->string('entity_type_id')->nullable();

            $table->string('email', 100)->nullable();
            $table->string('business_name', 100)->nullable();
            $table->string('address', 100)->nullable();

            // Estado
            $table->string('statu_type_id')->default('1');

            $table->unsignedTinyInteger('id_profession')->unsigned()->nullable();
            $table->foreign('id_profession')->references('profession_id')->on('professions');

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
