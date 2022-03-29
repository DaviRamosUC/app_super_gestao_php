<?php

namespace App\Http\Controllers;

class SobreNosController extends Controller
{
//    //Adicionando o middleware nom momento da instância do controller
    public function __construct()
    {
        $this->middleware('log.acesso');
    }

    public function sobreNos()
    {
        return view('site.sobre-nos');
    }
}
