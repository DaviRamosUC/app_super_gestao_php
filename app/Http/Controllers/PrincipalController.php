<?php

namespace App\Http\Controllers;
use App\MotivoContato;

class PrincipalController extends Controller
{
    //Métodos dentro de controladores são chamados de actions
    public function principal()
    {
        $motivo_contatos = MotivoContato::all();
        return view('site.principal', ['motivo_contatos'=>$motivo_contatos]);
    }
}
