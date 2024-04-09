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
        Schema::create('ticket_management', function (Blueprint $table) {
            $table->id();
            $table->integer('sum-quantity');

            $table->unsignedBigInteger('itinerary_management_id');



            $table->foreign('itinerary_management_id')->references('id')->on('itinerary_management')->onDelete('cascade')
                ->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ticket_management');
    }
};