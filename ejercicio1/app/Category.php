<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $filtable = [
        'name',
        'description',
    ];
    public function products(){
        return $this->hasMany('App\Product');//modelo relación
    }
}
