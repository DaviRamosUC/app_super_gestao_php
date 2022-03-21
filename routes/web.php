<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    return 'Olá, seja bem vindo ao curso';
});
*/
/* verbo http

get
post
put
patch
delete
options

*/
// Route::get($uri, $callback);
Route::get('/', 'PrincipalController@principal')->name("site.index");
Route::get('/sobre-nos', 'SobreNosController@sobreNos')->name("site.sobrenos");
Route::get('/contato', 'ContatoController@contato')->name("site.contato");
Route::get('/login', function () {
    return 'Login';
})->name("site.login");

/*
 * Agrupando rotas ao prefixo app
 * Dessa forma só é possível acessar a rota apartir do prefixo /app
 * Exemplo: "localhost:8000/app/clientes"
*/
Route::prefix('/app')->group(function () {
    Route::get('/clientes', function () {
        return 'Clientes';
    })->name("app.clientes");
    Route::get('/fornecedores', function () {
        return 'Fornecedores';
    })->name("app.fornecedores");
    Route::get('/produtos', function () {
        return 'Produtos';
    })->name("app.produtos");
});

Route::get('rota1', function () {
    echo 'Rota 1';
})->name('site.rota1');


Route::get('rota2', function () {
//    redirecionamento em callback
    return redirect()->route('site.rota1');
})->name('site.rota2');
/*Redirecionamento em linha (sem a necessidade de ter a rota ativa)
Route::redirect('/rota2', '/rota1');*/


/*
Rota com parâmetro

Parâmetros necessários para rota: nome, categoria, assunto, mensagem

Para recuperar o parâmetro basta criar uma variável com qualquer nome,
ela virá de acordo com a sequência

Para fazer um parâmetro opcional basta adicionar a ? ao fim da declaração do parâmetro
e definir um valor default para a variável em questão

Os parâmetros opcionais deves ser definidos da direita para a esquerda sempre, caso contrário o framework ficará perdido
*/
//Route::get('/contato/{nome}/{categoria_id}',
//    function (
//        string $nome = 'Desconhecido',
//        int $categoria_id = 1 // 1 - Informação
//    ) {
//        echo 'Rota contato com parâmetros <br>Nome: ' . $nome . ' <br>Categoria: ' . $categoria_id;
//    }
//) -> where('categoria_id', '[0-9]+')->where('nome', '[A-Za-z]+');


