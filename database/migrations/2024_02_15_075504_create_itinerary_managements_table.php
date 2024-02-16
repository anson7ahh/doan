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
            $table->unsignedBigInteger('itineraries_id');
            $table->unsignedBigInteger('coaches_id');
            $table->unsignedBigInteger('tickets_id');
            $table->unsignedBigInteger('freights_id');
            $table->unsignedBigInteger('staff_id');
            $table->foreign('coaches_id')->references('id')->on('coaches')->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('tickets_id')->references('id')->on('tickets')->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('freights_id')->references('id')->on('freights')->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('staff_id')->references('id')->on('staff')->onDelete('cascade')
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
