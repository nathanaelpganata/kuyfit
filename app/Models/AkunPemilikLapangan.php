<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class AkunPemilikLapangan extends Model implements AuthenticatableContract
{
    use HasFactory, Authorizable, Authenticatable;

    protected $table = 'akun_pemilik_lapangan';

    protected $fillable = [
        'firstName',
        'lastName',
        'email',
        'phoneNumber',
        'gender',
        'password',
    ];
    protected $hidden = ['password'];
    protected $primaryKey = 'id';
    protected $dates = ['created_at', 'updated_at'];
}
