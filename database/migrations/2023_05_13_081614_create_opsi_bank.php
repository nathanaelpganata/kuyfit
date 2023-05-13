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
        Schema::create('opsi_bank', function (Blueprint $table) {
            $table->increments('id');
            $table->string('bankName', 16);
            $table->string('accountNumber', 32)->unique('idx_unique_accountNumber');
            $table->timestamp('timeStamp')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->integer('ownerId')->unsigned()->index('idx_ownerId');
            $table->foreign('ownerId')->references('id')->on('akun_pemilik_lapangan'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('opsi_bank');
    }
};
