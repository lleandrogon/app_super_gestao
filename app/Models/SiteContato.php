<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//Site_Contato
//site_contato
//site_contatos

class SiteContato extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'telefone', 'email', 'motivo_contato', 'mensagem'];
}
