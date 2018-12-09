<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = [
        'nome',
        'id_categoria',
        'preco',
        'saldo',
        'custo',
        'perecivel',
        'icms',

    ];

    public function categoria()
    {
        return $this->belongsTo('App\Categoria');
    }

}
