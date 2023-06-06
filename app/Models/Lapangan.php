<?php

namespace App\Models;

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

    public function jenisOlahraga()
    {
        return $this->belongsTo(JenisOlahraga::class, 'sportId');
    }

    public function akunPemilikLapangan()
    {
        return $this->belongsTo(AkunPemilikLapangan::class, 'ownerId');
    }

    public function jadwalSewaLapangan() {
        return $this->hasMany(JadwalSewaLapangan::class, 'venueId');
    }

}
