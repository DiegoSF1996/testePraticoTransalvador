<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cic_ciclovia;

class CicloviaController extends Controller
{
    public function inicio($var = null)
    {
        $oCic = cic_ciclovia::All();
        return  view('ciclovia', compact('oCic'));
    }
    function salvar()
    {
        $dados = $_POST;
        $oCic = new cic_ciclovia();
        $oCic->cic_nom_ciclovia = $dados['cic_nom_ciclovia'];
        $oCic->cic_qte_km = $dados['cic_qte_km'];
        $oCic->cic_qte_largura = $dados['cic_qte_largura'];

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
