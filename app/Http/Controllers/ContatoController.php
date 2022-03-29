<?php

namespace App\Http\Controllers;

use App\MotivoContato;
use Illuminate\Http\Request;
use App\SiteContato;

class ContatoController extends Controller
{
    public function contato(Request $request)
    {
        $motivo_contatos = MotivoContato::all();
        return view('site.contato', ['motivo_contatos' => $motivo_contatos]);
    }

    public function salvar(Request $request)
    {
        //Realizar a validação dos dados do formulário recebidos no request
        $request->validate([
            'nome' => 'required|min:3|max:40', //nomes com no mínimo 3 caracteres e no máximo 40
            'telefone' => 'required',
            'email' => 'email|unique:site_contatos', //valida se o email digitado é válido e não está cadastrado
            'motivo_contatos_id' => 'required',
            'mensagem' => 'required',
        ]);
        SiteContato::create($request->all());
        return redirect()->route('site.index');
    }
}
