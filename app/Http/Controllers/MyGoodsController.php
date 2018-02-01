<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyGoodsController extends Controller
{
    public function index($id) {
//        $user = \App\User::where('id','=',$id);
        if(Auth::id() === $id) {
            return view('index.owner');
        }
        else {
            return view('indexpage.guest');
        }
    }
}
