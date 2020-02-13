<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    
    protected $table = 'image';
    protected $fillable = ['pname','pdes'];
}
