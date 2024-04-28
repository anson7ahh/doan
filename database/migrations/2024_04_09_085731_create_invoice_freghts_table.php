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
        Schema::create('invoice_freghts', function (Blueprint $table) {
            $table->id();
            $table->string('recipient_name')->nullable();
            $table->string('recipient_address')->nullable();

            $table->integer('recipient_phone_number')->nullable()->unique()->unsigned();
            $table->integer('price')->unsigned(); //giá
            $table->string('payer'); // người trả tiền

            $table->unsignedBigInteger('users_id');
            $table->unsignedBigInteger('freghts_id');


            $table->timestamps();

            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('freghts_id')->references('id')->on('freghts')->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoice_freghts');
    }
};
