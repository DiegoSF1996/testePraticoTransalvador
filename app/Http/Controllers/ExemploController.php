<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exemplo;

class ExemploController extends Controller
{
    public function inicio($var = null)
    {
        //$oTpo = Exemplo::All();
        /* return  view('exemplo', compact('oTpo')); */
        $o = new class
        {
        };
        $o->exemplo = 'exemplo';
        return  view('exemplo',compact('o'));
    }
}
