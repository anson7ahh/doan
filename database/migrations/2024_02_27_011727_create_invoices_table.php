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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('users_id');
            $table->unsignedBigInteger('itinerary_managements_id');




            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('itinerary_managements_id')->references('id')->on('itinerary_managements')->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
