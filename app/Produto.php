<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = [
       'id', 'nome', 'situacao', 'valor_unitario','quantidade'
    ];
}
