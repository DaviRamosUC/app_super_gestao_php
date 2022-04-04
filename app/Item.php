<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'produtos';
    protected $fillable = ['nome', 'descricao', 'peso', 'unidade_id'];

    /*
     * Este bloco de código informa ao Eloquent que
     * Produto tem um produtoDetalhe
     * 1 registro relacionado em produto_detalhes (fk) -> produto_id
     * produtos (pk)-> id
    */
    public function itemDetalhe(){
        return $this->hasOne('App\ItemDetalhe', 'produto_id', 'id');
    }
}
