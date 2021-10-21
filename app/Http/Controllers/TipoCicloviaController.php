<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tic_tipo_ciclovia;

class TipoCicloviaController extends Controller
{
    public function inicio($var = null)
    {
        $oTTC = tic_tipo_ciclovia::All();
        return  view('cons_tipociclovia', compact('oTTC'));
    }
}
