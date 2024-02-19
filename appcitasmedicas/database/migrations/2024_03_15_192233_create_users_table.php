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
            $table->unsignedSmallInteger('user_id', true);
            $table->smallInteger('third_data_id', false, true);
            $table->foreign('third_data_id')->references('data_id')->on('thirddatas');
            $table->string('mail',100);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('role');
            $table->tinyInteger('profession')->unsigned()->nullable();
            $table->foreign('profession')->references('profession_id')->on('professions');
            $table->tinyInteger('entity_id')->unsigned();
            $table->foreign('entity_id')->references('medical_entity_id')->on('medical_entities');
            $table->rememberToken();
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
