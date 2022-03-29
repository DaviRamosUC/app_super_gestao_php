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
        $regras = [
            'nome' => 'required|min:3|max:40', //nomes com no mínimo 3 caracteres e no máximo 40
            'telefone' => 'required',
            'email' => 'required|email|unique:site_contatos', //valida se o email digitado é válido e não está cadastrado
            'motivo_contatos_id' => 'required',
            'mensagem' => 'required|max:2000',
        ];
        $feedback = [
            'nome.min' => 'O campo nome precisa ter no minímo  3 letras',
            'nome.max' => 'O campo nome só pode ter no máximo  40 letras',
            'email.unique' => 'Este e-mail já foi cadastrado',
            'mensagem.max' => 'A mensagem deve ter no máximo 2000 caracteres',

            'email' => 'Este e-mail não é válido',
            'required' => 'O campo :attribute deve ser preenchido'
        ];
        $request->validate($regras, $feedback);
        SiteContato::create($request->all());
        return redirect()->route('site.index');
    }
}
