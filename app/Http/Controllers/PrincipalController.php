<?php

namespace App\Http\Controllers;

class PrincipalController extends Controller
{
    //Métodos dentro de controladores são chamados de actions
    public function principal()
    {
        $motivo_contatos = [
            '1' => 'Dúvida',
            '2' => 'Elogio',
            '3' => 'Reclamação',
        ];
        return view('site.principal', ['motivo_contatos'=>$motivo_contatos]);
    }
}
