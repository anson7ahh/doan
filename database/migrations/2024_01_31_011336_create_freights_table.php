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
        Schema::create('freights', function (Blueprint $table) {
            $table->id();
            $table->string('weight'); // cân nặng
            $table->unsignedBigInteger('phone_number');
            $table->integer('delivery_charge')->unsigned(); //tiền gửi

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
        Schema::dropIfExists('freights');
    }
};
