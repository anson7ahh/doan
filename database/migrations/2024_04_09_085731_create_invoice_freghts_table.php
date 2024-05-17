<?php

use App\Enums\InvoiceFreghtStatusEnum;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Enums\InvoiceFreghtCurrentPositionEnum;

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
            $table->string('weight')->nullable();
            $table->integer('recipient_phone_number')->unsigned();
            $table->integer('price')->unsigned()->nullable(); //giá
            $table->string('payer')->nullable();; // người trả tiền
            $table->string('current_position')->nullable();
            $table->enum('status', InvoiceFreghtStatusEnum::getValues())->default(InvoiceFreghtStatusEnum::notconfirm);
            $table->string('sender_name');
            $table->integer('sender_phone_number');
            $table->string('sender_address');
            $table->unsignedBigInteger('user_id');



            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')
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