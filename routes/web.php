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

Route::get('/', 'PrincipalController@principal');

Route::get('/sobre-nos', 'SobreNosController@sobreNos');

Route::get('/contato', 'ContatoController@contato');

/*
Rota com parâmetro

Parâmetros necessários para rota: nome, categoria, assunto, mensagem

Para recuperar o parâmetro basta criar uma variável com qualquer nome,
ela virá de acordo com a sequência

Para fazer um parâmetro opcional basta adicionar a ? ao fim da declaração do parâmetro
e definir um valor default para a variável em questão

Os parâmetros opcionais deves ser definidos da direita para a esquerda sempre, caso contrário o framework ficará perdido
*/
Route::get('/contato/{nome}/{categoria}/{assunto}/{mensagem?}',
    function (
        string $nome,
        string $categoria,
        string $assunto,
        string $mensagem = 'mensagem não informada'
    ) {
        echo 'Rota contato com parâmetro nome = ' . $nome . ' - ' . $categoria . ' - ' . $assunto . ' - ' . $mensagem;
    }
);

// Route::get($uri, $callback);

/* verbo http

get
post
put
patch
delete
options

*/
