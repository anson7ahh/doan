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
        Schema::create('invoice_passengers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('price_tickets_id');
            $table->unsignedBigInteger('coaches_id');
            $table->unsignedBigInteger('users_id');
            $table->unsignedBigInteger('itinerary_management_id');


            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('itinerary_management_id')->references('id')
                ->on('itinerary_management')->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('coaches_id')->references('id')->on('coaches')->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('price_tickets_id')->references('id')->on('price_tickets')->onDelete('cascade')
                ->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoice_passengers');
    }
};
