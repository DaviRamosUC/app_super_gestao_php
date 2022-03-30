<?php

use Illuminate\Support\Facades\Route;

// Route::get($uri, $callback);
Route::get('/', 'PrincipalController@principal')->name("site.index");

Route::get('/sobre-nos', 'SobreNosController@sobreNos')->name("site.sobrenos");

Route::get('/contato', 'ContatoController@contato')->name("site.contato");
Route::post('/contato', 'ContatoController@salvar')->name("site.contato");

Route::get('/login', 'LoginController@index')->name("site.login");
Route::post('/login', 'LoginController@autenticar')->name("site.login");


//Agrupando rotas com prefix
Route::middleware('autenticacao:padrao,visitante')->prefix('/app')->group(function () {

    Route::get('/clientes', function () {
        return 'Clientes';
    })->name("app.clientes");


    Route::get('/fornecedores', 'FornecedorController@index')
        ->name("app.fornecedores");

    Route::get('/produtos', function () {
        return 'Produtos';
    })->name("app.produtos");

});

Route::get('teste/{p1}/{p2}', 'TesteController@teste')->name('teste');

//Rota de erro padrão, substitui a página 404 do framework
Route::fallback(function () {
    echo 'A rota acessada não existe. <a href="' . route('site.index') . '">Clique aqui<a/> para ir para página inicial';
});



