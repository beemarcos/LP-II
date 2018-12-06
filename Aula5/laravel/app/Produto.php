<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = [
        'id',
        'nome',
    ];
    protected $dates = ['created_at','updated_at'];
}
