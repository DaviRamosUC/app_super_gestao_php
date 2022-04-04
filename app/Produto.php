<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = ['nome', 'descricao', 'peso', 'unidade_id'];

    /*
     * Este bloco de código informa ao Eloquent que
     * Produto tem um produtoDetalhe
     * 1 registro relacionado em produto_detalhes (fk) -> produto_id
     * produtos (pk)-> id
    */
    public function produtoDetalhe(){
        return $this->hasOne('App\ProdutoDetalhe');
    }
}
