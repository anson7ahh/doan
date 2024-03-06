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
            $table->string('seat_position')->nullable(); //vị trí chố ngồi
            $table->smallInteger('quantity')->default(1)->unsigned(); // so lượng
            $table->unsignedBigInteger('ticket_management_id');
            $table->foreign('ticket_management_id')->references('id')->on('ticket_management')->onDelete('cascade')
                ->onUpdate('cascade');
            $table->timestamps();
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
