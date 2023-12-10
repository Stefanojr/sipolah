<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class buangsampah extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'buangsampah';


    protected $fillable = [
        'user_id',
        'petugas_id',
        'nomorhp',
        'name',
        'email',
        'kapasitas_organik',
        'kapasitas_anorganik',
        'tanggal',
        'latitude_pengambilan',
        'longitude_pengambilan',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get the phone associated with the user.
     */
    public function petugas()
    {
        return $this->hasOne(User::class, 'id', 'petugas_id');
    }
}
