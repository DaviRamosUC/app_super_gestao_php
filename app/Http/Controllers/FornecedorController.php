<?php

namespace App\Http\Controllers;

class FornecedorController extends Controller
{
    public function index()
    {
        /* exemplo if/else
        $fornecedores = [
            'Fornecedor 1',
        ];*/
        $fornecedores = [
            0 => [
                'nome' => 'Fornecedor 1',
                'status' => 'N',
                'cnpj' => '0.000.000/000-00',
                'ddd' => '11', //SP
                'telefone' => '0000-0000'
            ],
            1 => [
                'nome' => 'Fornecedor 2',
                'status' => 'S',
                'cnpj' => null,
                'ddd' => '85', //CE
                'telefone' => '0000-0000'
            ],
            2 => [
                'nome' => 'Fornecedor 3',
                'status' => 'S',
                'cnpj' => null,
                'ddd' => '32', //MG
                'telefone' => '0000-0000'
            ],
        ];

        $fornecedores = [];

        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
