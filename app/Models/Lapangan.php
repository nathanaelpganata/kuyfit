<?php

namespace App\Models;

use Database\Factories\LapanganFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lapangan extends Model
{
    use HasFactory;

    protected $table = 'lapangan';

    protected $fillable = [
        'venueName',
        'oprTime',
        'address',
        'price',
        'phoneNumber',
        'wifi',
        'toilet',
        'canteen',
        'musalla',
        'photo',
        'timeStamp',
        'sportId',
        'ownerId',
    ];

    protected $primaryKey = 'id';

    public $timestamps = false;

    public function jenisOlahraga()
    {
        return $this->belongsTo(JenisOlahraga::class, 'sportId');
    }

    public function akunPemilikLapangan()
    {
        return $this->belongsTo(AkunPemilikLapangan::class, 'ownerId');
    }

    public function akunPenyewa()
    {
        return $this->belongsTo(AkunPenyewa::class, 'renterId');
    }

    // public function jadwalSewaLapangan()
    // {
    //     return $this->hasMany(JadwalSewaLapangan::class, 'venueId');
    // }

    public function pesananSewaLapangan()
    {
        return $this->hasMany(PesananSewaLapangan::class, 'venueId');
    }

    protected static function newFactory()
    {
        return LapanganFactory::new();
    }
}
