<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->unsignedMediumInteger('s', true);
            $table->smallInteger('medico_id', false, true);
            $table->foreign('medico_id')->references('id')->on('users');
            $table->enum('day', ['monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday']);
            $table->enum('status', ['available', 'not-available']);
            $table->dateTime('date');
            $table->time('start_time');
            $table->time('end_time');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};
