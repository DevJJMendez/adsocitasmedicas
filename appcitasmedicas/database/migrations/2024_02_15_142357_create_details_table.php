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
        Schema::create('details', function (Blueprint $table) {
            $table->tinyInteger('detail_id',true,true);

            $table->tinyInteger('id_header',false,true);
            $table->foreign('id_header')
                ->references('header_id')
                    ->on('headers')
                        ->onDelete('cascade')
                            ->onUpdate('cascade');
                            
            $table->string('value',40);
            $table->string('nomenclature',4);
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
