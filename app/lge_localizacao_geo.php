<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lge_localizacao_geo extends Model
{
    protected $fillable = [
        'lge_num_posicao',
        'lge_num_latitude',
        'lge_num_longitude',
        'lge_id_cic',
        'lge_id_int',

    ];

    public $timestamps = false;
    protected $table = 'lge_localizacao_geo';
    protected $primaryKey = 'lge_num_id_lge';
}
