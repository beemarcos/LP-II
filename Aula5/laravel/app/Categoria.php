<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = [
        'id',
        'nome',
        'id_categoria'
    ];
    protected $dates = ['created_at','updated_at'];
}

