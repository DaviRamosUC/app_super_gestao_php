<?php

namespace App\Http\Controllers;

class SobreNosController extends Controller
{
//    //Adicionando o middleware nom momento da instância do controller
//    public function __construct()
//    {
//        $this->middleware(LogAcessoMiddleware::class);
//    }

    public function sobreNos()
    {
        return view('site.sobre-nos');
    }
}
