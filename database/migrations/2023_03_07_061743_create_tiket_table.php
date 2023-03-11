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
        Schema::create('tiket', function (Blueprint $table) {
            $table->id('booking_code');
            $table->string('nama');
            $table->string('flight_number');
            $table->string('departure');
            $table->string('arrival');
            $table->string('departure_info');
            $table->string('arrival_info');
            $table->string('class');
            $table->string('harga');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tiket');
    }
};
