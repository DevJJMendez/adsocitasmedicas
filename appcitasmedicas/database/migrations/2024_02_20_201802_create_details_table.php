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
        Schema::create('details', function (Blueprint $table) {
            $table->tinyIncrements('detail_id')->unsigned();

            $table->unsignedTinyInteger('id_header');
            $table->foreign('id_header')->references('header_id')->on('headers');

            $table->string('value', 40);
            $table->string('nomenclature', 4)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('details');
    }
};
