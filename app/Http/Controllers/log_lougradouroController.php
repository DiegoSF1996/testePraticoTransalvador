<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class log_lougradouroController extends Controller
{
    public function inicio($var = null)
    {
        $oCic = cic_ciclovia::All();
        return  view('ciclovia', compact('oCic'));
    }
}
