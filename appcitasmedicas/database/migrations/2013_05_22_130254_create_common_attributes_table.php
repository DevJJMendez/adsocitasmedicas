<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('common_attributes', function (Blueprint $table) {
            $table->unsignedTinyInteger('common_attribute_id', true);
            $table->string('name', 50);
            $table->string('nomenclature', 4);
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('common_attributes');
    }
};
