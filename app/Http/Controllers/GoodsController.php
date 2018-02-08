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
        return redirect()->route('goods.detail',['id' => $goods->id]);
        //return view('goodspage.goodsphoto');
    }

    public function showDetail($id) {
        $goods = \App\Goods::where('id','=',$id)->first();
        if($goods === null) abort(404);
        else {
            $comments = \App\Comment::where('goods_id','=',$id)->get();
            $photos = $goods->photos;
//            dd($goods->id);
//            if($goods->seller_id === Auth::id()) return view('goodspage.edit',['goods' => $goods]);
            return view('goodspage.detail',['goods' => $goods,'comments' => $comments,'photos' => $photos]);
            //TODO::评论,删除
        }
    }

    public function editPage($id) {
        $goods = \App\Goods::where('id','=',$id)->first();
        if(Auth::id() === $goods->seller_id) return view('goodspage.edit',['goods' => $goods]);
        else abort(401);
    }

    public function editDetail($id,Request $request) {
        $goods = \App\Goods::where('id','=',$id)->first();
        if($goods === null) abort(404);
        if(Auth::id() === $goods->seller_id) {
            $goods->name = $request->input('name');
            $goods->detail = $request->input('detail');
            $goods->categories_id = $request->input('categories_id');
            $goods->in_price = $request->input('inprice');
            $goods->out_price = $request->input('outprice');
            $goods->display = $request->input('display',1);
            $goods->save();
            return redirect()->route('goods.detail',['id' => $goods->id]);
        }
        else abort(401);
    }

    public function delete($id) {
        $goods = \App\Goods::where('id','=',$id)->first();
        if($goods === null) abort(404);
        if(Auth::id() === $goods->seller_id) {
            $goods->delete();
            return redirect()->route('home');
        }
        else abort(401);
    }

    public function comment($goods_id,Request $request) {
        if(Auth::check()) {
            $goods = \App\Goods::where('id','=',$goods_id);
            if($goods === null) abort(404);
            $comment = new \App\Comment;
            $comment->user_id = Auth::id();
            $comment->goods_id = $goods_id;
            $comment->comment_id = $request->input('comment_id');
            $comment->content = $request->input('content');
            $comment->save();
            return redirect()->route('goods.detail',['id' => $goods_id]);
        }
        else abort(401);
    }

    public function buy($id,Request $request) {
        $goods = \App\Goods::where('id','=',$id)->first();
        $seller = $goods->seller;
//        if(Auth::id() === $goods->seller_id) {
//            return view(goodspage.error)
//        }
        return view('goodspage.buy',['seller' => $seller,'goods' => $goods]);
    }

    public function categories($categories_id) {
        $goods = \App\Goods::where('categories_id','=',$categories_id)->paginate(18);
        return view('goodspage.goodslist',['goods' => $goods]);
    }

    public function search(Request $request) {
        $keywords = $request->input('keywords');
        $goods = \App\Goods::where('name','like','%'.$keywords.'%')->paginate(18);
        return view('goodspage.goodslist',['goods' => $goods]);
    }
}
