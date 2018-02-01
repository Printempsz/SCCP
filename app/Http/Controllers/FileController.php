<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FileController extends Controller
{
    public function avatar(Request $request) {
        $avatar = new \App\File;
        $avatar->user_id = Auth::id();
        $avatar->filename = $request->input('filename');
        $avatar->mimetype = $request->input('mimetype');
        $avatar->extension = $request->input('extension');
        $avatar->save();
    }

    public function goods(Request $request) {
        $photo = new \App\File;
        $photo->goods_id = $request->input('goods_id');
        $photo->filename = $request->input('filename');
        $photo->mimetype = $request->input('mimetype');
        $photo->extension = $request->input('extension');
        $photo->save();
    }
}
