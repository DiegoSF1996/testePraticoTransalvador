<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cic_ciclovia extends Model
{
    protected $fillable = [
        'cic_nom_ciclovia',
        'cic_qte_km',
        'cic_qte_largura',
        'cic_nom_referencia',
        'cic_id_log',
        'cic_id_tic'

    ];

    public $timestamps = false;
    protected $table = 'cic_ciclovia';
    protected $primaryKey = 'cic_id_cic';
}
