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
        Schema::create('booking', function (Blueprint $table) {
            $table->id();
            $table->integer('booking_number');
            $table->dateTime('booking_date');
            $table->decimal('prix');

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('pack_id')->nullable();
            $table->unsignedBigInteger('hotel_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('pack_id')->references('id')->on('packs');
            $table->foreign('hotel_id')->references('id')->on('hotels');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking');
    }
};
