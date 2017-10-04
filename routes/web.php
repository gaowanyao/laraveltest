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

//访问项目的根目录时，使用这个函数进行响应
//Route::get('/', function () {
//    $name = "gcan";
//    return view('welcome')->with("name",$name);
//});

Route::get("/","SiteController@home");
Route::get("news","NewsController@index");


Route::get('/hello', function () {
    return "Hello";
});

Route::get('/about', function () {
    $content = '<p style="color:red;">我们</p>';
//    return view('about')->with("content",$content);
    $data = ['content'=>$content,'age'=>23];
    return view('about',$data);
});