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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('seat_position')->unique(); //vị trí chố ngồi
            $table->unsignedBigInteger('phone_number');
            $table->integer('ticket_price')->unsigned(); //giá vé
            $table->tinyInteger('quantity')->default(1)->change()->unsigned();
            $table->timestamps();
            $table->foreign('phone_number')->references('phone_number')->on('users')->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
