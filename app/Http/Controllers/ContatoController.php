<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteContato;

class ContatoController extends Controller
{
    public function contato(Request $request)
    {
        /*echo '<pre>';
        print_r($request->all());
        echo '</pre>';
        echo $request->input('nome');
        echo '<br>';
        echo $request->input('email');*/

        /*
         * Aqui é possível instanciar o objeto com os attr do objeto request
        $contato = new SiteContato();
        $contato->nome = $request->input('nome');
        $contato->telefone = $request->input('telefone');
        $contato->email = $request->input('email');
        $contato->motivo_contato = $request->input('motivo_contato');
        $contato->mensagem = $request->input('mensagem');
//        print_r($contato->getAttributes());
        $contato->save();
        */

        //Este código faz o mesmo que o de cima
//        $contato = new SiteContato();
//        $contato->create($request->all());
//        print_r($contato->getAttributes());
//        $contato->save();

        return view('site.contato');
    }
}
