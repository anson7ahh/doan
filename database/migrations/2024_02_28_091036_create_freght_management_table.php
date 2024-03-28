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
        Schema::create('freght_management', function (Blueprint $table) {
            $table->id();
            $table->string('status');
            $table->integer('price')->unsigned(); //giá
            $table->string('payer'); // người trả tiền

            $table->unsignedBigInteger('freghts_id');
            // $table->unsignedBigInteger('itinerary_managements_id');



            $table->foreign('freghts_id')->references('id')->on('freghts')->onDelete('cascade')
                ->onUpdate('cascade');
            // $table->foreign('itinerary_managements_id')->references('id')->on('itinerary_managements')->onDelete('cascade')
            //     ->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('freght_management');
    }
};