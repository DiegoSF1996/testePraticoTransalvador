<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exemplo extends Model
{
    protected $fillable = [
        'cadg_codigo',
        'compins_coeficiente',
        'compins_codigocomposicao',
        'compins_iteminscomp',
        'compins_Dcustomaodeobra',
        'compins_Dper_maodeobra',
        'compins_NDcustomaodeobra',
        'compins_NDper_maodeobra',
        'compins_Dcustomaterial',
        'compins_Dper_material',
        'compins_NDcustomaterial',
        'compins_NDper_material',
        'compins_Dcustoequipamento',
        'compins_NDcustoequipamento',
        'compins_Dper_equipamento',
        'compins_NDper_equipamento',
        'compins_Dcustoservicosterceiros',
        'compins_NDcustoservicosterceiros',
        'compins_Dper_servicosterceiros',
        'compins_NDper_servicosterceiros',
        'compins_Dcustooutros',
        'compins_NDcustooutros',
        'compins_NDper_outros',
        'compins_Dper_outros',

    ];

    public $timestamps = false;
    protected $table = 'composicao_insumo';
    protected $primaryKey = 'compins_codigo';

    public function composicaoPai()
    {
        return $this->hasMany(Composicao::class, 'comp_codigocomposicao', 'compins_codigocomposicao')->where('composicao.cadg_codigo',  $this->cadg_codigo);
    }
    public function composicao()
    {
        return $this->hasMany(Composicao::class, 'comp_codigocomposicao', 'compins_iteminscomp')->where('composicao.cadg_codigo',  $this->cadg_codigo);
    }
    public function insumo()
    {
        return $this->hasMany(Insumo::class, 'ins_codigoinsumo', 'compins_iteminscomp')->where('insumo.cadg_codigo',  $this->cadg_codigo);
    }
    public function composicao1()
    {
        return $this->hasOne('App\composicao', 'comp_codigo', 'comp_codigo');
    }
    protected function setKeysForSaveQuery(\Illuminate\Database\Eloquent\Builder $query)
    {
        return $query->where('gruplan_codigo', $this->getAttribute('gruplan_codigo'))
            ->where('famplan_codigo', $this->getAttribute('famplan_codigo'))->where('etaplan_codigo', $this->getAttribute('etaplan_codigo'));
    }

    public function planilha()
    {
        return $this->belongsTo('App\Planilha', 'plan_codigo', 'plan_codigo');
    }
}
