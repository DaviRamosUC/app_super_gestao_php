<?php

namespace App\Http\Controllers;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = [
            'Fornecedor 1',
            'Fornecedor 2',
            'Fornecedor 3',
            'Fornecedor 4',
            'Fornecedor 5',
            'Fornecedor 6',
            'Fornecedor 7',
            'Fornecedor 8',
            'Fornecedor 9',
            'Fornecedor 10',
        ];
        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
