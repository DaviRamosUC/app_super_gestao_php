<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'produtos';
    protected $fillable = ['nome', 'descricao', 'peso', 'unidade_id', 'fornecedor_id'];

    /*
     * Este bloco de código informa ao Eloquent que
     * Produto tem um produtoDetalhe
     * 1 registro relacionado em produto_detalhes (fk) -> produto_id
     * produtos (pk)-> id
    */
    public function itemDetalhe()
    {
        return $this->hasOne('App\ItemDetalhe', 'produto_id', 'id');
    }

    public function fornecedor()
    {
        return $this->belongsTo('App\Fornecedor');
    }

    public function pedidos()
    {
        /*
            3 param-> representa o nome da FK da tabela mapeada pelo model na tabela de relacionamento (pedido_produtos)
            4 param-> representa o nome da FK da tabela mapeada pelo model utilizado no relacionamento que estamos implementando
        */
        return $this->belongsToMany('App\Pedido', 'pedidos_produtos', 'pedido_id', 'pedido_id');
    }
}
