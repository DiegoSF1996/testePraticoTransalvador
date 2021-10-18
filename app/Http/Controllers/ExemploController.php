<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exemplo;
class ExemploController extends Controller
{
    public function inicio ($var = null)
    {
        //$oTpo = Exemplo::All();
        /* return  view('exemplo', compact('oTpo')); */
        return  view('exemplo');

    }
}
