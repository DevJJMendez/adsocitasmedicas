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
        Schema::create('mails', function (Blueprint $table) {
            $table->smallIncrements('mail_id')->unsigned();

            $table->smallInteger('third_data_id')->unsigned();
            $table->foreign('third_data_id')->references('data_id')->on('thirddatas');

            $table->tinyInteger('mail_type_id')->unsigned();
            $table->foreign('mail_type_id')->references('detail_id')->on('details');

            $table->tinyInteger('priority_id')->unsigned();
            $table->foreign('priority_id')->references('detail_id')->on('details');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mails');
    }
};
