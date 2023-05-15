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
        Schema::create('jadwal_sewa_lapangan', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('dateTimeStart');
            $table->dateTime('dateTimeEnd');
            $table->integer('venueId')->unsigned()->index('idx_venueId');
            $table->foreign('venueId')->references('id')->on('lapangan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal_sewa_lapangan');
    }
};
