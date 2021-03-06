@extends('home')
@section('index')
    <div class = "container">
        <div class = "jumbotron" align="center">
            <h1>在这里分享你的闲置物品</h1>
            <p>或是发现一些有趣的东西</p>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-6">
                    <br/>
                    <br/>
                    <br/>
                    {{--<h3>数码产品：</h3>--}}
                    {{--<div class="col-md-3">--}}
                        {{--<a href="#">电脑</a>--}}
                        {{--<a href="#">ipad</a>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-3">--}}
                        {{--<a href="#">电脑</a>--}}
                        {{--<a href="#">ipad</a>--}}
                    {{--</div>--}}
                    <table class="table">
                        <caption>数码产品：</caption>
                        <tbody>
                            <tr>
                                <td><a href="{{route('goods.categories',['categories_id' => 2])}}">电脑相关</a></td>
                                <td><a href="{{route('goods.categories',['categories_id' => 4])}}">平板电脑</a></td>
                                <td><a href="{{route('goods.categories',['categories_id' => 3])}}">摄影相关</a></td>
                            </tr>
                            <tr>
                                <td><a href="{{route('goods.categories',['categories_id' => 1])}}">手机</a></td>
                                <td><a href="{{route('goods.categories',['categories_id' => 5])}}">耳机音箱</a></td>
                                <td><a href="{{route('goods.categories',['categories_id' => 6])}}">其他电子产品</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="col-md-6">
                    <div id="myCarousel" class="carousel slide">
                        <!-- 轮播（Carousel）指标 -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                        <!-- 轮播（Carousel）项目 -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="/images/1.jpg" alt="First slide">
                                {{--<img src="/pictures/2LugncvAjO6kim2fxGkqWuzQjbvA3Xmen2w0beud.png" alt="test">--}}
                            </div>
                            <div class="item">
                                <img src="/images/2.jpg" alt="Second slide">
                            </div>
                            <div class="item">
                                <img src="/images/3.jpg" alt="Third slide">
                            </div>
                        </div>
                        <!-- 轮播（Carousel）导航 -->
                        <a class="carousel-control left" href="#myCarousel"
                           data-slide="prev">&lsaquo;
                        </a>
                        <a class="carousel-control right" href="#myCarousel"
                           data-slide="next">&rsaquo;
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="col-md-6">
                    <div id="myCarousel" class="carousel slide">
                        <!-- 轮播（Carousel）指标 -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                        <!-- 轮播（Carousel）项目 -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="/images/1.jpg" alt="First slide">
                            </div>
                            <div class="item">
                                <img src="/images/2.jpg" alt="Second slide">
                            </div>
                            <div class="item">
                                <img src="/images/3.jpg" alt="Third slide">
                            </div>
                        </div>
                        <!-- 轮播（Carousel）导航 -->
                        <a class="carousel-control left" href="#myCarousel"
                           data-slide="prev">&lsaquo;
                        </a>
                        <a class="carousel-control right" href="#myCarousel"
                           data-slide="next">&rsaquo;
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <br/>
                    <br/>
                    <br/>
                    {{--<h3>数码产品：</h3>--}}
                    {{--<div class="col-md-3">--}}
                    {{--<a href="#">电脑</a>--}}
                    {{--<a href="#">ipad</a>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-3">--}}
                    {{--<a href="#">电脑</a>--}}
                    {{--<a href="#">ipad</a>--}}
                    {{--</div>--}}
                    <table class="table">
                        <caption>服饰：</caption>
                        <tbody>
                        <tr>
                            <td><a href="{{route('goods.categories',['categories_id' => 7])}}">男鞋</a></td>
                            <td><a href="{{route('goods.categories',['categories_id' => 8])}}">女鞋</a></td>
                            <td><a href="{{route('goods.categories',['categories_id' => 9])}}">男装</a></td>
                        </tr>
                        <tr>
                            <td><a href="{{route('goods.categories',['categories_id' => 10])}}">女鞋</a></td>
                            <td><a href="{{route('goods.categories',['categories_id' => 11])}}">其他男装</a></td>
                            <td><a href="{{route('goods.categories',['categories_id' => 12])}}">其他女装</a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="col-md-12">
                <div class="col-md-6">
                    <br/>
                    <br/>
                    <br/>
                    {{--<h3>数码产品：</h3>--}}
                    {{--<div class="col-md-3">--}}
                    {{--<a href="#">电脑</a>--}}
                    {{--<a href="#">ipad</a>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-3">--}}
                    {{--<a href="#">电脑</a>--}}
                    {{--<a href="#">ipad</a>--}}
                    {{--</div>--}}
                    <table class="table">
                        <caption>数码产品：</caption>
                        <tbody>
                        <tr>
                            <td><a href="#">笔记本</a></td>
                            <td><a href="#">ipad</a></td>
                            <td><a href="#">相机</a></td>
                        </tr>
                        <tr>
                            <td><a href="#">耳机</a></td>
                            <td><a href="#">音箱</a></td>
                            <td><a href="#">显示器</a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <div class="col-md-6">
                    <div id="myCarousel" class="carousel slide">
                        <!-- 轮播（Carousel）指标 -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                        <!-- 轮播（Carousel）项目 -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="/images/1.jpg" alt="First slide">
                            </div>
                            <div class="item">
                                <img src="/images/2.jpg" alt="Second slide">
                            </div>
                            <div class="item">
                                <img src="/images/3.jpg" alt="Third slide">
                            </div>
                        </div>
                        <!-- 轮播（Carousel）导航 -->
                        <a class="carousel-control left" href="#myCarousel"
                           data-slide="prev">&lsaquo;
                        </a>
                        <a class="carousel-control right" href="#myCarousel"
                           data-slide="next">&rsaquo;
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="col-md-6">
                    <div id="myCarousel" class="carousel slide">
                        <!-- 轮播（Carousel）指标 -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                        <!-- 轮播（Carousel）项目 -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="/images/1.jpg" alt="First slide">
                            </div>
                            <div class="item">
                                <img src="/images/2.jpg" alt="Second slide">
                            </div>
                            <div class="item">
                                <img src="/images/3.jpg" alt="Third slide">
                            </div>
                        </div>
                        <!-- 轮播（Carousel）导航 -->
                        <a class="carousel-control left" href="#myCarousel"
                           data-slide="prev">&lsaquo;
                        </a>
                        <a class="carousel-control right" href="#myCarousel"
                           data-slide="next">&rsaquo;
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <br/>
                    <br/>
                    <br/>
                    {{--<h3>数码产品：</h3>--}}
                    {{--<div class="col-md-3">--}}
                    {{--<a href="#">电脑</a>--}}
                    {{--<a href="#">ipad</a>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-3">--}}
                    {{--<a href="#">电脑</a>--}}
                    {{--<a href="#">ipad</a>--}}
                    {{--</div>--}}
                    <table class="table">
                        <caption>数码产品：</caption>
                        <tbody>
                        <tr>
                            <td><a href="#">笔记本</a></td>
                            <td><a href="#">ipad</a></td>
                            <td><a href="#">相机</a></td>
                        </tr>
                        <tr>
                            <td><a href="#">耳机</a></td>
                            <td><a href="#">音箱</a></td>
                            <td><a href="#">显示器</a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection