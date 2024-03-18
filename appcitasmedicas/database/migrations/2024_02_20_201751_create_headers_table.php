<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('headers', function (Blueprint $table) {
            $table->tinyIncrements('header_id')->unsigned();
            $table->string('key', 30);
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('headers');
    }
};
