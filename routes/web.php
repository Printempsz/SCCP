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
    'as'        => 'goods',
],function () {
    Route::get('publish',                    'GoodsController@publish')->middleware('checklogin');
    Route::get('detail/{id}',                'GoodsController@detail');
    Route::push('detail/{goods_id}/comment', 'GoodsController@comment')->middleware('checklogin');
});

Route::group([
    'prefix'    => ''
]);
