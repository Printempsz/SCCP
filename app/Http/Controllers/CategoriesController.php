<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function view($id) {
        $goods = \App\Goods::where('categories_id','=',$id);
        return view(goods.kind,['goods' => $goods]);
    }
}
