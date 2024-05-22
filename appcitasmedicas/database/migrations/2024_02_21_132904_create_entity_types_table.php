<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('entity_types', function (Blueprint $table) {
            $table->unsignedTinyInteger('entity_type_id', true);
            $table->unsignedTinyInteger('id_common_attribute')->nullable();
            $table->foreign('id_common_attribute')->references('common_attribute_id')->on('common_attributes')->onDelete('set null');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('entity_types');
    }
};
