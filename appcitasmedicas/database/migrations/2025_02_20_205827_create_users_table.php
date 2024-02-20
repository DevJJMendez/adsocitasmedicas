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
        Schema::create('users', function (Blueprint $table) {
            // $table->id();
            // $table->string('name');
            // $table->string('email')->unique();
            // $table->timestamp('email_verified_at')->nullable();
            // $table->string('password');
            // $table->string('cedula', 10)->nullable();
            // $table->string('address', 244)->nullable();
            // $table->string('number_phone', 30)->nullable();
            // $table->string('role')->nullable();
            // $table->rememberToken();
            // $table->timestamps();

            $table->unsignedSmallInteger('id', true);
            $table->smallInteger('third_data_id', false, true)->nullable();
            $table->foreign('third_data_id')->references('data_id')->on('third_data');
            $table->string('email',100);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('role')->nullable();
            $table->tinyInteger('profession')->unsigned()->nullable();
            $table->foreign('profession')->references('profession_id')->on('professions');

            // $table->tinyInteger('entity_id')->unsigned()->nullable();
            // $table->foreign('entity_id')->references('medical_entity_id')->on('medical_entities');

            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
