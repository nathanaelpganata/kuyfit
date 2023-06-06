<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalSewaLapangan extends Model
{
    use HasFactory;

    protected $table = 'jadwal_sewa_lapangan';

    protected $fillable = [
        'dateTimeStart',
        'dateTimeEnd',
        'venueId'
    ];

    protected $primaryKey = 'id';

    public function lapangan()
    {
        return $this->belongsTo(lapangan::class, 'venueId');
    }

    public function pesananSewaLapangan() {
        return $this->hasOne(PesananSewaLapangan::class, 'scheduleId');
    }

}
