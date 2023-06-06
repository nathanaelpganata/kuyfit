<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisOlahraga extends Model
{
    use HasFactory;

    protected $table = 'jenis_olahraga';

    protected $fillable = [
        'sportType'
    ];

    protected $primaryKey = 'id';

    public $timestamps = false;

    public function lapangan()
    {
        return $this->hasMany(Lapangan::class, 'sportId');
    }
}
