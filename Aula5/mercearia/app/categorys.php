<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categorys extends Model
{
    protected $fillablev = ['id','name'];
    protected $dates = ['created_at','updated_at'];
}
