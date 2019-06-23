<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $filtable=[
        'name',
        'price',
        'stock',
    ];
    public function category(){//depende de lo que se necesite
        return $this->belongsTo('App\Category');//modelo relación
    }

    public function providers(){//depende de lo que se necesite
        return $this->belongsToMany('App\Provider');//de uno a varios
    }
}
