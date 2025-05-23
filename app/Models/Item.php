<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'produtos';
    protected $fillable = ['nome', 'descricao', 'peso', 'unidade_id', 'fornecedor_id'];

    public function itemDetalhe() {
        return $this->hasOne(ItemDetalhe::class, 'produto_id', 'id');
    }

    public function fornecedor() {
        return $this->belongsTo(Fornecedor::class);
    }

    public function pedidos() {
        return $this->belongsToMany(Pedido::class, PedidoProduto::class, 'produto_id', 'pedido_id');

        /*
            3 - Representa o nome da FK da tabela mapeada pelo model na tabela de relacionamento
            4 - Representa o nome da FK da tabela mapeada pelo Model utilizado no relacionamento que estamos implementando
        */
    }
}
