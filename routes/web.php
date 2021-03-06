<?php

use Illuminate\Support\Facades\Route;

// Route::get($uri, $callback);
Route::get('/', 'PrincipalController@principal')->name("site.index");

Route::get('/sobre-nos', 'SobreNosController@sobreNos')->name("site.sobrenos");

Route::get('/contato', 'ContatoController@contato')->name("site.contato");
Route::post('/contato', 'ContatoController@salvar')->name("site.contato");

Route::get('/login/{erro?}', 'LoginController@index')->name("site.login");
Route::post('/login', 'LoginController@autenticar')->name("site.login");


//Agrupando rotas com prefix
Route::middleware('autenticacao:padrao,visitante')->prefix('/app')->group(function () {
    Route::get('/home', 'HomeController@index')->name("app.home");
    Route::get('/sair', 'LoginController@sair')->name("app.sair");

    //Rotas de fornecedores
    Route::get('/fornecedor', 'FornecedorController@index')->name("app.fornecedor");
    Route::get('/fornecedor/adicionar', 'FornecedorController@adicionar')->name("app.fornecedor.adicionar");
    Route::post('/fornecedor/adicionar', 'FornecedorController@adicionar')->name("app.fornecedor.adicionar");
    Route::post('/fornecedor/listar', 'FornecedorController@listar')->name("app.fornecedor.listar");
    Route::get('/fornecedor/listar', 'FornecedorController@listar')->name("app.fornecedor.listar");
    Route::get('/fornecedor/editar/{id}/{msg?}', 'FornecedorController@editar')->name("app.fornecedor.editar");
    Route::get('/fornecedor/excluir/{id}', 'FornecedorController@excluir')->name("app.fornecedor.excluir");


    //Rotas de Produtos
    Route::resource('produto', 'ProdutoController');

    //Rotas de Produtos-Detalhes
    Route::resource('produto-detalhe', 'ProdutoDetalheController');

    Route::resource('cliente', 'ClienteController');
    Route::resource('pedido', 'PedidoController');
    // Route::resource('pedido-produto', 'PedidoProdutoController');
    Route::get('pedido-produto/create/{pedido}', 'PedidoProdutoController@create')->name('pedido-produto.create');
    Route::post('pedido-produto/store/{pedido}', 'PedidoProdutoController@store')->name('pedido_produto.store');
});

Route::get('teste/{p1}/{p2}', 'TesteController@teste')->name('teste');

//Rota de erro padr??o, substitui a p??gina 404 do framework
Route::fallback(function () {
    echo 'A rota acessada n??o existe. <a href="' . route('site.index') . '">Clique aqui<a/> para ir para p??gina inicial';
});
