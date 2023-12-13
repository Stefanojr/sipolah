<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserLangganan extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'users_langganan';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'petugas_id',
        'expired_at',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'expired_at' => 'datetime',
    ];

    /**
     * Get the phone associated with the user.
     */
    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    /**
     * Get the phone associated with the user.
     */
    public function petugas()
    {
        return $this->hasOne(User::class, 'id', 'petugas_id');
    }
}
