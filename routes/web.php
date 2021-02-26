<?php

use Illuminate\Support\Facades\Route;

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


// 所有的文件都是由路由来开门
Route::get('/product/lists', function () {
    echo 'aaaa';
});

// 路由传参
Route::get('/product/detail/{id}/{iidd}', function ($id,$iidd) {
    $id = $_GET['id'];
    echo $id.'aa'.$iidd;
});

Route::get('/article/lists','Article@lists');

Route::get('/article/index','Article@index');
