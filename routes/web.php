<?php


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/fuck','FuckController@super')->middleware('checklogin');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group([
    'prefix'    => 'goods',
    'as'        => 'goods.',
],function () {
    Route::get('publish', function () {return view('goodspage.publish');});
    Route::post('publish',                    'GoodsController@publish')->middleware('checklogin')->name('publish');
    Route::get('detail/{id}',                'GoodsController@showDetail');
    Route::post('edit/{id}',               'GoodsController@editDtail');
    Route::get('edit/{id}',                 'GoodsController@editPage');
    Route::post('detail/{goods_id}/comment', 'GoodsController@comment')->middleware('checklogin');
});

Route::group([
    'prefix'    => 'mygoods',
    'as'        => 'mygoods.',
],function () {
    Route::get('{id}',      'MyGoodsController@index');
});

Route::group([
   'prefix' => 'file',
   'as'     => 'file',
], function () {
    Route::post('avatar',       'FileController@avatar')->middleware('checklogin');
    Route::post('goods',        'FileController@goods')->middleware('checklogin');
});

Route::group([
    'prefix'    => 'shopping_list',
],function () {
    Route::get('{user_id}',          'ListController@view');
    Route::post('{goods_id}',   'ListController@add');
});

