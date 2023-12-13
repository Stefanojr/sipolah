<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'users';

    protected $fillable = [
        'name',
        'username',
        'email',
        'nomorhp',
        'role',
        'password',
        'lat',
        'lon',
        'verived',
        'LanggananPetugas',
        'LanggananExpired',
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
        'LanggananExpired'  => 'datetime',
    ];

    /**
     * Get the phone associated with the user.
     */
    public function langganan()
    {
        return $this->hasOne(UserLangganan::class, 'user_id', 'id');
    }

    /**
     * Get the phone associated with the user.
     */
    public function petugas()
    {
        return $this->hasOne(UserLangganan::class, 'petugas_id', 'id');
    }
}
