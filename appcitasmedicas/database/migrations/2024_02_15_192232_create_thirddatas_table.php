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
            $table->foreign('document_id')->references('detail_id')->on('documenttypes_view');

            $table->string('idnumber',12)->unique()->nullable();
            $table->string('nit',9)->nullable();
            $table->string('firstName',30);
            $table->string('secondName',30)->nullable();
            $table->string('surName',30);
            $table->string('secondSurName',30)->nullable();
            $table->string('businessName',50)->nullable();
            $table->string('address',100);

            $table->tinyInteger('statu_id')->unsigned();
            $table->foreign('statu_id')->references('detail_id')->on('status_view');

            $table->timestamps();

            // TODO: DATETIME 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('thirddatas');
    }
};
