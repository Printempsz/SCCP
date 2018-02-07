@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            @if(count($goods) === 0)
                <div class="col-md-12">
                    <h3>暂时没有相关的宝贝呢~</h3>
                    <a href="{{route('goods.publishPage')}}">我要分享这个类型的宝贝</a>
                </div>
            @endif
            @foreach($goods as $good)
                <div class="col-md-4">
                    {{--<img src="/images/4.jpg" alt="{{$good->name}}的配图" class="col-md-4">--}}
                    {{--<a href="{{route('goods.detail',['id'=> $good->id])}}">{{$good->name}}</a>--}}
                    <table class="table">
                        <tr><td><img src="/images/4.jpg" alt="{{$good->name}}的配图" class="img-responsive"></td></tr>
                        <tr><td><a href="{{route('goods.detail',['id'=> $good->id])}}">{{$good->name}}</a></td></tr>

                    </table>
                </div>
            @endforeach
            <div class="col-md-12">
                {!! $goods->links() !!}
            </div>
        </div>
    </div>
@endsection

