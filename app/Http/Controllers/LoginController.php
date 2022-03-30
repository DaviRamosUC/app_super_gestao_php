<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        $erro = '';
        if ($request->get('erro')==1){
            $erro = 'Usuário e/ou senha não existe';
        }
        return view('site.login', ['titulo' => 'Login', 'erro' => $erro]);
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

        //Recuperamos os parâmetros do formulário
        $email = $request->get('usuario');
        $password = $request->get('senha');

        echo "Usuario $email | Senha $password <br>";

        $user = new User();

        $usuario = $user->where('email', $email)->where('password', $password)->get()->first();

        if (isset($usuario->name)) {
            echo 'Usuário existe';
        } else {
            return redirect()->route('site.login', ['erro' => 1]);
        }

    }
}
