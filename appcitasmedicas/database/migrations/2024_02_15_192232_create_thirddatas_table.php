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
        Schema::create('thirddatas', function (Blueprint $table) {
            $table->smallIncrements('data_id')->unsigned();

            $table->tinyInteger('document_id')->unsigned();
            $table->foreign('document_id')->references('detail_id')->on('details');

            $table->string('identification_number',12)->unique()->nullable();
            $table->string('nit',9)->nullable()->unique();
            $table->string('first_name',30);
            $table->string('second_name',30)->nullable();
            $table->string('sur_name',30);
            $table->string('second_sur_name',30)->nullable();
            $table->string('number_phone',30)->nullable();
            $table->string('mail',100)->unique();
            $table->dateTime('birth_date')->nullable();

            $table->tinyInteger('gender_id',false,true)->nullable();
            $table->foreign('gender_id')->references('detail_id')->on('details');

            $table->string('business_name',50)->nullable();
            $table->string('address',100);

            $table->tinyInteger('statu_id')->unsigned();
            $table->foreign('statu_id')->references('detail_id')->on('details');
            
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('thirddatas');
    }
};
