<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = [
        'produto_id', 'quantidade', 'data_pedido', 'valor_unitario', 'situacao'
    ];
}
