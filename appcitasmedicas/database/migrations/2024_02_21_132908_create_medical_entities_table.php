<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('medical_entities', function (Blueprint $table) {
            $table->tinyIncrements('medical_entity_id');
            $table->string('nit', 9);
            $table->string('number_phone', 30);
            $table->string('email', 100);
            // Tipo de entidad medica
            $table->string('entity_type_id', 2);
            $table->string('business_name', 100);
            $table->string('address', 100);
            // Estado
            $table->string('statu_type_id')->default('1');

            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('medical_entities');
    }
};
