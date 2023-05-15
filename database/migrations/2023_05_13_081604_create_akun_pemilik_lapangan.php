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
        Schema::create('akun_pemilik_lapangan', function (Blueprint $table) {
            $table->increments('id');
            $table->string("firstName");
            $table->string("lastName");
            $table->string("email")->unique('idx_unique_email');
            $table->string("phoneNumber", 16);
            $table->boolean("gender");
            $table->boolean("accountType");
            $table->string("password");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('akun_pemilik_lapangan');
    }
};
