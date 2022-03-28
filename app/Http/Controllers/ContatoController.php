<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteContato;

class ContatoController extends Controller
{
    public function contato()
    {
        return view('site.contato');
    }

    public function salvar(Request $request)
    {
        //Realizar a validação dos dados do formulário recebidos no request
        $request->validate([
            'nome' => 'required|min:3|max:40', //nomes com no mínimo 3 caracteres e no máximo 40
            'telefone' => 'required',
            'email' => 'required',
            'motivo_contato' => 'required',
            'mensagem' => 'required',
        ]);
        SiteContato::create($request->all());
    }
}
