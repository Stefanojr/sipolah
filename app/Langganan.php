<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Langganan extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'langganan';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];
}
