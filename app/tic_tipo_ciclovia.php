<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tic_tipo_ciclovia extends Model
{
    protected $fillable = [
        'tic_nom_tipo_ciclovia'

    ];

    public $timestamps = false;
    protected $table = 'tic_tipo_ciclovia';
    protected $primaryKey = 'tic_id_tic';
}
