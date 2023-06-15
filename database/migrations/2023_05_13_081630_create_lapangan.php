<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('lapangan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('venueName', 32);
            $table->string('oprTime', 32);
            $table->string('address');
            $table->string('phoneNumber', 16);
            $table->integer('price')->unsigned();
            $table->boolean('wifi');
            $table->boolean('toilet');
            $table->boolean('canteen');
            $table->boolean('musalla');
            $table->string('photo');
            $table->timestamp('timeStamp')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->integer('sportId')->unsigned()->index('idx_sportId');
            $table->integer('ownerId')->unsigned()->index('idx_ownerId');
            $table->foreign('sportId')->references('id')->on('jenis_olahraga');
            $table->foreign('ownerId')->references('id')->on('akun_pemilik_lapangan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lapangan');
    }
};
