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
            $table->timestamps();

            $table->unsignedBigInteger('ticket_id');
            $table->unsignedBigInteger('coach_management_id');


            $table->foreign('ticket_id')->references('id')
                ->on('tickets')->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('coach_management_id')->references('id')
                ->on('coach_management')->onDelete('cascade')
                ->onUpdate('cascade');
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