<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tic_tipo_ciclovia;

class TipoCicloviaController extends Controller
{
    public function inicio($var = null)
    {
        $oTCic = tic_tipo_ciclovia::All();
        return  view('cons_tipociclovia', compact('oTCic'));
    }
    public function cadastro($id = null)
    {
        $oTCic = $this->gera_obj();
        if ($id != null) {
            $oTCic = tic_tipo_ciclovia::find($id);
        }
        return  view('cad_tipo_ciclovia', compact('oTCic'));
    }
    function salvar()
    {
        $oTCic = new tic_tipo_ciclovia();
        $dados = $_POST;
        if (isset($dados['tic_id_tic']) && !empty($dados['tic_id_tic'])) {
            $oTCic= tic_tipo_ciclovia::find($dados['tic_id_tic']);
        }
        $oTCic->tic_nom_tipo_ciclovia = $dados['tic_nom_tipo_ciclovia'];
        $oTCic->save();
        return redirect()->back();
    }
    function deletar($id)
    {
        $oTCic = tic_tipo_ciclovia::find($id);
        $oTCic->delete();
        return redirect()->back();
    }
}
