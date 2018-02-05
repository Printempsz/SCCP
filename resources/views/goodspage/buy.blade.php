@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h3>你想要购买的是：{{$goods->name}}</h3>
                <p>快去和他/她联系，将心仪的宝贝带回家</p>
            </div>

            <div class="col-md-8">
                <h3>卖家的QQ号:</h3>{{$seller->QQ}}
                <br/>
                <a href="tencent://message/?uin={{$seller->QQ}}&site=&Menu=yes Service=300&sigT=42a1e5347953b64c5ff3980f8a6e644d4b31456cb0b6ac6b27663a3c4dd0f4aa14a543b1716f9d45">和卖家沟通</a>
                <br/>
                <h3>卖家的微信:</h3>{{$seller->wechat}}
            </div>
        </div>
    </div>
@endsection