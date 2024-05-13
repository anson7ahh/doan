<?php

use App\Enums\TicketStatusEnum;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string('userName');
            $table->integer('phoneNumber');
            $table->enum('status', TicketStatusEnum::getValues())->default(TicketStatusEnum::notpay);
            $table->timestamps();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')
                ->onUpdate('cascade');
            $table->unsignedBigInteger('coaches_id');
            $table->unsignedBigInteger('itinerary_management_id');
            $table->foreign('coaches_id')->references('id')->on('coaches')->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('itinerary_management_id')->references('id')->on('itinerary_management')->onDelete('cascade')
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