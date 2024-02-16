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
        Schema::create('coach_managements', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('coaches_id');
            $table->date('coach_maintenance_date'); //ngày bảo dưỡng xe
            $table->timestamps();
            $table->foreign('coaches_id')->references('id')->on('coaches')->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coach_managements');
    }
};
