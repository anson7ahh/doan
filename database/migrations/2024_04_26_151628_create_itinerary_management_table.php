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
        Schema::create('itinerary_management', function (Blueprint $table) {
            $table->id();
            $table->DATETIME('start_time'); //thời gian đi
            $table->DATETIME('end_time'); //thời gian tới
            $table->unsignedBigInteger('coaches_id');
            $table->unsignedBigInteger('itineraries_id');


            $table->foreign('coaches_id')->references('id')->on('coaches')->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('itineraries_id')->references('id')->on('itineraries')->onDelete('cascade')
                ->onUpdate('cascade');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};