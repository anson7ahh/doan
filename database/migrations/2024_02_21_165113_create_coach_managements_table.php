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
        Schema::create('coach_managements', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('coaches_id');
            $table->unsignedBigInteger('itinerary_managements_id');


            $table->foreign('itinerary_managements_id')->references('id')->on('itinerary_managements')->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('coaches_id')->references('id')->on('coaches')->onDelete('cascade')
                ->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coaches_managements');
    }
};
