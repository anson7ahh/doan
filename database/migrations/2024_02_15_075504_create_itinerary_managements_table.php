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
        Schema::create('itinerary_managements', function (Blueprint $table) {

            $table->id();
            $table->json('price')->nullable(); //giá


            $table->unsignedBigInteger('itineraries_id');
            $table->unsignedBigInteger('staff_managements_id');




            $table->foreign('staff_managements_id')->references('id')->on('staff_managements')->onDelete('cascade')
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
        Schema::dropIfExists('itinerary_managements');
    }
};
