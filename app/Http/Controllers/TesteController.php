<?php

namespace App\Http\Controllers;

class TesteController extends Controller
{
    public function teste(int $p1, int $p2)
    {
//        Outras formas de anexar variáveis a views
/*
        echo "A soma de $p1 + $p2 é: " . ($p1 + $p2);
        return view('site.teste',['p1'=>$p1, 'p2'=>$p2]); array associativo
        return view('site.teste', compact('p1', 'p2')); //compact
*/

        return view('site.teste')->with('p1', $p1)->with('p2', $p2); //with
    }
}
