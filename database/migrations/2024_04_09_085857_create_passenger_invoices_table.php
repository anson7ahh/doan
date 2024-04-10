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
        Schema::create('passenger_invoices', function (Blueprint $table) {
           
                $table->id();
                // $table->timestamps();

                $table->Integer('price');//gia
                $table->unsignedBigInteger('coaches_id');
                $table->unsignedBigInteger('users_id');
                $table->unsignedBigInteger('itinerary_management_id');

                $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade')
                    ->onUpdate('cascade');

                $table->foreign('itinerary_management_id')->references('id')
                ->on('itinerary_management')->onDelete('cascade')
                    ->onUpdate('cascade');
                $table->foreign('coaches_id')->references('id') ->on('coaches')->onDelete('cascade')
                    ->onUpdate('cascade');
            });
      
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('passenger_invoices');
    }
};