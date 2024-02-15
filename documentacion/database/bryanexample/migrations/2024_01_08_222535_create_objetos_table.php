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
        Schema::create('objetos', function (Blueprint $table) {
            $table->smallIncrements('id')->unsigned();
            $table->unsignedSmallInteger('personal_id');
            $table->string('serial',50)->nullable();
            $table->string('tipo_objeto',50);
            $table->string('marca',60);
            $table->text('observacion')->nullable();
            $table->boolean('estado')->default('1');
            $table->foreign('personal_id')->references('id')->on('personals');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('objetos');
    }
};
