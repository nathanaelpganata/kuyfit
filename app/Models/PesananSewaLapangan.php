<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesananSewaLapangan extends Model
{
    use HasFactory;

    protected $table = 'pesanan_sewa_lapangan';

    protected $fillable = [
        'renterId',
        'ownerId',
        'bankId',
        'scheduleId',
        'timeStamp',
        'paymentProof',
        'deadline',
        'status',
    ];

    protected $primaryKey = 'id';

    public $timestamps = false;

    public function akunPenyewa()
    {
        return $this->belongsTo(AkunPenyewa::class, 'renterId');
    }

    public function akunPemilikLapangan()
    {
        return $this->belongsTo(AkunPemilikLapangan::class, 'ownerId');
    }

    public function opsiBank()
    {
        return $this->belongsTo(OpsiBank::class, 'bankId');
    }

    public function jadwalSewaLapangan()
    {
        return $this->belongsTo(JadwalSewaLapangan::class, 'scheduleId');
    }

}
