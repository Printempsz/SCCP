<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FuckController extends Controller
{
    public function super(Request $request) {
        dd($request->user());
    }
}
