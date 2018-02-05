@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <img src="/images/1.jpg" alt="{{$goods->name}}的配图" class="img-responsive">
            </div>
            <div class="col-md-4">
                <ul style="list-style-type: none">
                    <li><h3>{{$goods->name}}</h3></li>
                    <li><h3>售价:{{$goods->out_price}}元</h3></li>
                    <li><p>原价:{{$goods->in_price}}元</p></li>
                    @if($goods->seller_id === Auth::id())
                        <a href="/goods/edit/{{$goods->id}}"><button type="button" class="btn btn-success">我要修改</button> </a>
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
                <img src="/images/1.jpg" alt="还行" class="img-responsive">
            </div>
        </div>
    </div>
@endsection