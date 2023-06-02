<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesananSewaLapangan extends Model
{
    use HasFactory;

    protected $table = 'pesanan_sewa_lapangan';

    protected $fillable = [
        'date',
        'hour',
        'bank',
        'bukti_pembayaran',
    ];
    protected $dates = ['created_at', 'updated_at'];
}
