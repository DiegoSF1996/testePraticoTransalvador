<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class log_logradouro extends Model
{
    protected $fillable = [
        'log_nom_logradouro',
        'log_nom_reduzido',
        'log_nom_abriavao',
        'log_dat_cadastro',
        'log_num_extensao',
        'log_id_bai'
    ];

    public $timestamps = false;
    protected $table = 'log_logradouro';
    protected $primaryKey = 'log_id_log';
}
