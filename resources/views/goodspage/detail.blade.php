@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                {{--<img src="/images/1.jpg" alt="{{$goods->name}}的配图" class="img-responsive">--}}
                @foreach($photos as $photo)
                    <img src = "{{$photo->filename}}" alt="{{$goods->name}}的配图" class="img-responsive">
                @endforeach
            </div>
            <div class="col-md-4">
                <ul style="list-style-type: none">
                    <li><h3>{{$goods->name}}</h3></li>
                    <li><h3>售价:{{$goods->out_price}}元</h3></li>
                    <li><p>原价:{{$goods->in_price}}元</p></li>
                    @if($goods->seller_id === Auth::id())
                        <a href="/goods/edit/{{$goods->id}}"><button type="button" class="btn btn-success">我要修改</button></a>
                        <form class="form-horizontal" method="POST" action="/goods/delete/{{$goods->id}}">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-danger" value="我要删除">
                        </form>
                    @else
                        <a href="/goods/{{$goods->id}}/buy"><button type="button" class="btn btn-warning">我想购买</button></a>
                    @endif
                </ul>
            </div>

            <div class="col-md-12">
                <h3>商品简介:</h3>
                <p>{{$goods->detail}}</p>
            </div>
            <div class="col-md-12">
                {{--<img src="/images/1.jpg" alt="还行" class="img-responsive">--}}
                @foreach($photos as $photo)
                    <img src = "{{$photo->filename}}" alt="{{$goods->name}}的配图" class="img-responsive">
                @endforeach
            </div>

            <div class="col-md-12">
                <h3>评论:</h3>
                <form class="form-horizontal" method="POST" action="{{route('goods.comment',['goods_id' => $goods->id])}}">
                    {{ csrf_field() }}
                    <input type="text" class="form-control" name="content" required>
                    <input type="submit" class="btn btn-primary" value="我要评论">
                </form>
            </div>
            <br/>
            <div class="col-md-12">
            @foreach($comments as $comment)
                {{--<div class="col-md-12">--}}
                    {{--<p>评论时间：{{$comment->created_at}}</p>--}}
                    {{--<p>评论内容:{{$comment->content}}</p>--}}
                    {{--<p>评论作者:{{$comment->user->name}}</p>--}}
                {{--</div>--}}
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <p>{{$comment->user->name}} {{$comment->created_at}}</p>
                    </div>
                    <div class="panel-body">
                        {{$comment->content}}
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </div>
@endsection