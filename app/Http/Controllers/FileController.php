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
        $goods = \App\Goods::where('id',$id);
        if($goods->seller_id !== Auth::id()) abort(401);
        $path = $request->file('photo')->store('public/pictures');
        $filename ='/storage/'.substr($path,7);
//        dd(asset($path));
        $photo = new \App\File;
        $photo->goods_id = $id;
        $photo->user_id = Auth::id();
        $photo->filename = $filename;
        $photo->mimetype = 'picture';
        $photo->extension = $request->file('photo')->extension();
        $photo->save();
        return view('goodspage.upload',['status' => 1,'id' => $id]);
    }

    public function delete(Request $request) {
        $file = \App\File::where('id',$request->input('fileId'))->first();
        if($file === null) abort(404);
        else {
            if($file->goods->seller_id === Auth::id()){
                $file->delete();
                return redirect()->back();
            }
        }
    }
}
