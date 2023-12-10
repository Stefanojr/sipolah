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
        'type',
    ];
}
