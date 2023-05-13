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
        Schema::create('pesanan_sewa_lapangan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('renterId')->unsigned()->index('idx_renterId');
            $table->integer('ownerId')->unsigned();
            $table->integer('bankId')->unsigned()->index('idx_bankId');
            $table->integer('scheduleId')->unsigned()->unique('idx_scheduleId');
            $table->timestamp('timeStamp')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('paymentProof');
            $table->dateTime('deadline');
            $table->string('status');
            $table->index(['ownerId', 'status'], 'idx_ownerId_status');
            $table->foreign('renterId')->references('id')->on('akun_penyewa');
            $table->foreign('ownerId')->references('id')->on('akun_pemilik_lapangan');
            $table->foreign('bankId')->references('id')->on('opsi_bank');
            $table->foreign('scheduleId')->references('id')->on('jadwal_sewa_lapangan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanan_sewa_lapangan');
    }
};
