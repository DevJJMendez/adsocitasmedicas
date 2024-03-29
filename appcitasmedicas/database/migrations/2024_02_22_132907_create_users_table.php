<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->unsignedSmallInteger('id')->autoIncrement();
            $table->smallInteger('third_data_id')->nullable()->unsigned();
            $table->foreign('third_data_id')->references('data_id')->on('third_data');
            $table->string('email', 100);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
