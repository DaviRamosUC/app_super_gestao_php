<?php

namespace App\Http\Controllers;

class PrincipalController extends Controller
{
    //Métodos dentro de controladores são chamados de actions
    public function principal(){
        return view('site.principal');
    }
}
