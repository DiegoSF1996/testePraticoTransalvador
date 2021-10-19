<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hfu_horario_funcionamento extends Model
{

    protected $fillable = [
        'hfu_id_hor',
        'hfu_id_tdi',
        'hfu_id_cic',
        'hfu_dti_operacao',
        'hfu_dtf_operacao'

    ];

    public $timestamps = false;
    protected $table = 'hfu_horario_funcionamento';
    protected $primaryKey = 'hfu_id_hfu';
}
