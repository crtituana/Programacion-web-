<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{
    public function getProducts(){
        return "hola mundo";
    }

    public function Product(){
         $products = Product::where('name','=','price')->get();
         return response()-> json($products,200);
    }
}
