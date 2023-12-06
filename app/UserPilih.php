<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserPilih extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'users_pilih';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'petugas_id',
        'langganan',
    ];
}
