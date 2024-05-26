<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('medical_entities', function (Blueprint $table) {
            $table->unsignedTinyInteger('medical_entity_id', true);
            $table->string('business_name', 100);
            $table->string('nit', 9);
            $table->string('number_phone', 30);
            $table->string('email', 100);
            $table->unsignedTinyInteger('id_entity_type')->nullable();
            $table->foreign('id_entity_type')->references('entity_type_id')->on('entity_types')->onDelete('set null');
            $table->string('address', 50);
            $table->unsignedTinyInteger('id_status')->default('1')->nullable();
            $table->foreign('id_status')->references('status_id')->on('statuses')->onDelete('set null');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('medical_entities');
    }
};
