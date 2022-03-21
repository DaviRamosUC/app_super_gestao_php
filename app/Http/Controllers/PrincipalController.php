<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    //Métodos dentro de controladores são chamados de actions
    public function principal(){
        echo 'Olá, seja bem vindo ao curso!';
    }
}
