<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = ['nome', 'descricao', 'peso', 'unidade_id'];

    public function produtoDetalhe() {
        return $this->hasOne(ProdutoDetalhe::class);

        //Produto tem 1 produtoDetalhe

        //1 registro relacionado em produtoDetalher (fk) -> produto_id
        //produtos (pk) -> id
    }
}
