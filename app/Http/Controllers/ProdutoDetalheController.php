<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Unidade;
use App\ProdutoDetalhe;
use App\ItemDetalhe;


class ProdutoDetalheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('app.produt_detalhe')
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $unidades = Unidade::all();
        return view('app.produto_detalhe.create', ['unidades' => $unidades]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ProdutoDetalhe::create($request->all());
        echo 'Cadastro realizado com sucesso';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProdutoDetalhe  $Produto_detalhe
     * @return \Illuminate\Http\Response
     */
    public function edit(ItemDetalhe $produto_detalhe)
    {
        $unidades = Unidade::all();
        return view('app.produto_detalhe.edit', ['unidades' => $unidades, 'produto_detalhe' => $produto_detalhe]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  ProdutoDetalhe  $produto_detalhe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProdutoDetalhe $produto_detalhe)
    {
        $produto_detalhe->update($request->all());
        echo 'A atualização foi realizada com sucesso';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
