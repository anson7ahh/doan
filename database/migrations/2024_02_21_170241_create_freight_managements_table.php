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
        Schema::create('freight_managements', function (Blueprint $table) {
            $table->id();
            $table->string('status')->comment('FreightManagementsStatusEnum')->change();
            $table->integer('price')->unsigned(); //giá
            $table->string('payer')->comment('FreightManagementsPayerEnum')->change(); // người trả tiền

            $table->unsignedBigInteger('freights_id');
            $table->unsignedBigInteger('itinerary_managements_id');



            $table->foreign('freights_id')->references('id')->on('freights')->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('itinerary_managements_id')->references('id')->on('itinerary_managements')->onDelete('cascade')
                ->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('freight_managements');
    }
};
