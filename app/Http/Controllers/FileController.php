<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FileController extends Controller
{
//    public function avatar(Request $request) {
//        $avatar = new \App\File;
//        $avatar->user_id = Auth::id();
//        $avatar->filename = $request->input('filename');
//        $avatar->mimetype = $request->input('mimetype');
//        $avatar->extension = $request->input('extension');
//        $avatar->save();
//    }
    public function uploadPage($id) {
        return view('goodspage.upload',['id' => $id]);
    }

    public function upload($id,Request $request) {
//        $photo = new \App\File;
//        $photo->goods_id = $request->input('goods_id');
//        $photo->filename = $request->input('filename');
//        $photo->mimetype = $request->input('mimetype');
//        $photo->extension = $request->input('extension');
//        $photo->save();
//        dd($request->file('photo'));
//        dd($request->file('photo'));
        $path = $request->file('photo')->store('public/pictures');
        dd(asset($path));
//        dd(asset($path));
        $photo = new \App\File;
        $photo->goods_id = $id;
        $photo->user_id = Auth::id();
        $photo->filename = asset($path);
        $photo->mimetype = 'picture';
        $photo->extension = $request->file('photo')->extension();
        $photo->save();
        return view('goodspage.upload',['status' => 1,'id' => $id]);
    }

    public function delete() {

    }
}
