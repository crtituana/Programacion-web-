<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{   
    protected $filtable=[
        'name',
        'description',
    ];
    public function products(){//depende de lo que se necesite
        return $this->belongsToMany('App\Product');//de uno a varios
    }
}
