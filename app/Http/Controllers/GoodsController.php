<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GoodsController extends Controller
{
    public function publish(Request $request) {
        $this->validate($request,[
            'name' => 'required',
            'detail' => 'required',
            'categories_id' => 'required|integer',
            'inprice' => 'nullable|numeric',
            'outprice' => 'required|numeric',
        ]);
        $user = Auth::user();
        if($user === null) abort(401);
        $goods = new \App\Goods;
        $goods->name = $request->input('name');
        $goods->detail = $request->input('detail');
        $goods->categories_id = $request->input('categories_id');
        $goods->seller_id = Auth::id();
        $goods->in_price = $request->input('inprice');
        $goods->out_price = $request->input('outprice');
        $goods->display = $request->input('display',1);
        $goods->save();
        return view('goodspage.goodsphoto');
    }

    public function showDetail($id) {
        $goods = \App\Goods::where('id','=',$id)->first();
        if($goods === null) abort(404);
        else {
            return view('good.detail',['goods' => $goods]);
            //TODO::发布者的视图，评论
        }
    }

    public function editPage($id) {
        $goods = \App\Goods::where('id','=',$id)->first();
        if(Auth::id() === $goods->seller_id) return view('goodspage.editpage');
        else abort(401);
    }

    public function editDetail($id,Request $request) {
        $goods = \App\Goods::where('id','=',$id)->first();
        if($goods === null) abort(404);
        if(Auth::id() === $goods->selller_id) {
            $goods->name = $request->input('name');
            $goods->detail = $request->input('detail');
            $goods->categories_id = $request->input('categories_id');
            $goods->inprice = $request->input('inprice');
            $goods->outprice = $request->input('outprice');
            $goods->display = $request->input('display',1);
            $goods->save();
        }
        else abort(401);
    }

    public function comment($goods_id,Request $request) {
        if(Auth::check()) {
            $goods = \App\Goods::where('id','=',$goods_id);
            if($goods === null) abort(404);
            $comment = new \App\Comment;
            $comment->user_id = Auth::id();
            $comment->good_id = $goods_id;
            $comment->comment_id = $request->input('comment_id');
            $comment->content = $request->input('content');
            $comment->save();
        }
        else abort(401);
    }
}
