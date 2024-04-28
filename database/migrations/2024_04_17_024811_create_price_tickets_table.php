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
        Schema::create('price_tickets', function (Blueprint $table) {
            $table->id();
            $table->integer('price')->nullable()->unsigned();
            $table->unsignedBigInteger('itineraries_id');
            $table->foreign('itineraries_id')->references('id')
                ->on('itineraries')->onDelete('cascade')
                ->onUpdate('cascade');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('price_tickets');
    }
};