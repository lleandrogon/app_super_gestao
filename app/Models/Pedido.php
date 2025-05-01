<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    public function produtos() {
        //return $this->belongsToMany(Produto::class, PedidoProduto::class);

        return $this->belongsToMany(Item::class, PedidoProduto::class, 'pedido_id', 'produto_id');
        /*
            1 - Modelo do relacionamento N pra N em relação ao modelo implementado
            2 - É a tabela auxiliar que armazena os registros de relacionamento
            3 - Representa o nome da FK da tabela mapeada pelo Model na tabela de relacionamento
            4 - Representa o nome da FK da tabela mapeada pelo Model utilizado no relacionamento que estamos implementando
        */
    }
}
