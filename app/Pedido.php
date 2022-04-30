<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    public function produtos()
    {
        // Caso com nome da classe padrão
        // return $this->belongsToMany('App\Produto', 'pedidos_produtos');

        //Caso com nome diferente do padrão
        /*
            1 -> Modelo do relacionamento NxN em relação ao Modelo que estamos implementando
            2 -> É a tabela auxiliar que armazena os registros de relacionamentos
            3 -> Representa o nome da FK da tabela mapeada pelo modelo na tabela relacionada
            4 -> Representa o nome da FK da tabela mapeada pelo model utilizada no relacionamento que estamos implementando
        */
        return $this->belongsToMany('App\Item', 'pedidos_produtos', 'pedido_id', 'produto_id')->withPivot('created_at');
    }
}
