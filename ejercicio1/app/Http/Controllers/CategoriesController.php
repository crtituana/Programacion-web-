<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoriesController extends Controller
{
    public function postCategory(Request $request){
        $category =Category::create($request ->all('name','description'));
        return $category;
   }

    public function putCategory(Request $request){
        $category = Category :: findorfail($request->id);
        $category->update(['name'=>$request->name ]);
        return $category;
    }
    public function deleteCategory(Request $request){
        $category -> delete('id');
        return $category;
    }

}
