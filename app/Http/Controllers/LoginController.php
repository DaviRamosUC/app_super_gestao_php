<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('site.login', ['titulo' => 'Login']);
    }

    public function autenticar(Request $request)
    {
        //regras de validação
        $regras = [
            'usuario' => 'email',
            'senha' => 'required',
        ];
        //as mensagens de feedback de validação
        $feedback = [
            'usuario.email' => 'O email informado não é válido',
            'required' => 'O campo senha é obrigatório',
        ];

        //se não passar pelo validate
        //caso não passe pela validação ele voltará para a página anterior
        $request->validate($regras, $feedback);

        print_r($request->all());
    }
}
