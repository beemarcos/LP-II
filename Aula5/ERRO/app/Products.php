<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillablev = ['id','name','id_categorys'];
    protected $dates = ['created_at','updated_at'];
}
