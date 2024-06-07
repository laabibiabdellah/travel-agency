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
        Schema::create('billing', function (Blueprint $table) {
            $table->id();
            $table->integer('bill_number');
            $table->decimal('total_price');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('booking_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('booking_id')->references('id')->on('booking');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('billing');
    }
};
