<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class hfu_horario_funcionamentoController extends Controller
{
    public function inicio($var = null)
    {
        $oCic = cic_ciclovia::All();
        return  view('ciclovia', compact('oCic'));
    }
}
