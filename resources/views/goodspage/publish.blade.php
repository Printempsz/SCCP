@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">宝贝的基本信息</div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('goods.publish') }}">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">你的宝贝叫啥名字哟？</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="detail" class="col-md-4 control-label">介绍下你的宝贝呗：</label>

                                <div class="col-md-6">
                                    <textarea id="detail" class="form-control" name="detail" required placeholder="在这里写下你的宝贝描述"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="categories_id" class="col-md-4 control-label">你的宝贝是啥类型的哦？</label>

                                <div class="col-md-6">
                                    <label class="radio-inline">
                                        <input type="radio" name="categories_id" value="1" checked>手机相关
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="categories_id" value="2">电脑相关
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="categories_id" value="3">相机相关
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="categories_id" value="4">平板电脑相关
                                    </label>
                                    <br/>
                                    <label class="radio-inline">
                                        <input type="radio" name="categories_id" value="5">音频相关
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="categories_id" value="6">其他数码产品相关
                                    </label>
                                    <br/>
                                    <label class="radio-inline">
                                        <input type="radio" name="categories_id" value="7">男鞋
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="categories_id" value="8">女鞋
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="categories_id" value="9">男装
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="categories_id" value="2">女装
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="in_price" class="col-md-4 control-label">多少钱买到手的呀？</label>

                                <div class="col-md-6">
                                    <input id="inprice" type="text" class="form-control" name="inprice">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="outprice" class="col-md-4 control-label">打算卖多少钱呢？</label>

                                <div class="col-md-6">
                                    <input id="outprice" type="text" class="form-control" name="outprice" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="categories_id" class="col-md-4 control-label">如果我问你是否愿意在首页展示你的宝贝呢？</label>

                                <div class="col-md-6">
                                    <label class="radio-inline">
                                        <input type="radio" name="bool" value="1" checked>好呀好呀！
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="bool" value="0">那可不行！
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        我要提交！
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
