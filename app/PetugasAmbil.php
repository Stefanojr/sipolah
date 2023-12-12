<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PetugasAmbil extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'petugas_ambil';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'petugas_id',
        'sampah_id',
    ];
}
