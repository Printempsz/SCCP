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
    return view('index');
});

Route::get('/fuck','FuckController@super')->middleware('checklogin');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group([
    'prefix'    => 'goods',
    'as'        => 'goods.',
],function () {
    Route::get('publish', function () {return view('goodspage.publish');})->middleware('checklogin')->name('publishPage');
    Route::post('publish',                   'GoodsController@publish')->middleware('checklogin')->name('publish');
    Route::get('detail/{id}',                'GoodsController@showDetail')->name('detail');
    Route::post('edit/{id}',                 'GoodsController@editDetail')->middleware('checklogin');
    Route::get('edit/{id}',                  'GoodsController@editPage')->middleware('checklogin');
    Route::post('detail/{goods_id}/comment', 'GoodsController@comment')->middleware('checklogin')->name('comment');
    Route::get('{id}/buy',                   'GoodsController@buy')->middleware('checklogin');
    Route::post('delete/{id}',               'GoodsController@delete')->middleware('checklogin')->name('delete');
    Route::get('categories/{categories_id}', 'GoodsController@categories')->name('categories');
    Route::post('search',         'GoodsController@search')->name('search');
    Route::get('upload/{id}',                'FileController@uploadPage')->middleware('checklogin')->name('uploadPage');
    Route::post('upload/{id}',               'FileController@upload')->middleware('checklogin')->name('upload');
    Route::post('deleteFile',       'FileController@delete')->middleware('checklogin')->name('deleteFile');
});

Route::group([
    'prefix'    => 'mygoods',
    'as'        => 'mygoods.',
],function () {
    Route::get('{id}',      'MyGoodsController@index')->middleware('checklogin');
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
    'middleware' => 'checklogin',
],function () {
    Route::get('{user_id}',          'ListController@view');
    Route::post('{goods_id}',   'ListController@add');
});

Route::group([
    'prefix'    => 'categories_id=',
], function () {
    Route::get('{id}',      'CategoriesController@view');
});

