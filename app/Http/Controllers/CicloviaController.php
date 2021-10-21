<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cic_ciclovia;

class CicloviaController extends Controller
{
    public function inicio($var = null)
    {
        $oCic = cic_ciclovia::All();
        return  view('cons_ciclovia', compact('oCic'));
    }
    public function cadastro($id = null)
    {
        $oCic = $this->gera_obj();
        if ($id != null) {
            $oCic = cic_ciclovia::find($id);
        }
        return  view('cad_ciclovia', compact('oCic'));
    }
    function salvar()
    {
        $oCic = new cic_ciclovia();
        $dados = $_POST;
        if (isset($dados['cic_id_cic']) && !empty($dados['cic_id_cic'])) {
            $oCic= cic_ciclovia::find($dados['cic_id_cic']);
        }
        $oCic->cic_nom_ciclovia = $dados['cic_nom_ciclovia'];
        $oCic->cic_qte_km = $dados['cic_qte_km'];
        $oCic->cic_qte_largura = $dados['cic_qte_largura'];
        $oCic->cic_nom_referencia = $dados['cic_nom_referencia'];
        $oCic->save();
        return redirect()->back();
    }
    function deletar($id)
    {
        $oCic = cic_ciclovia::find($id);
        $oCic->delete();
        return redirect()->back();
    }
}
