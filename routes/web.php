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
Route::get("articles","ArticleController@index");
//Route::get("articles/{id}","ArticleController@show")->where(["id"=>'[0-9]+']);  //告诉框架id是从0-9之间的数字一个或者多个
Route::get("articles/{id}","ArticleController@show")->where(["id"=>'\d+']);  //告诉框架id是从0-9之间的数字一个或者多个 \d是一样的
Route::get("articles/create","ArticleController@create")->middleware("auth"); //必须要登录才能发表文章
Route::post("articles/create","ArticleController@store")->middleware("auth");  //post方式提交，调用store方法


Route::get('/hello', function () {
    return "Hello";
});

Route::get('/about', function () {
    $content = '<p style="color:red;">我们</p>';
//    return view('about')->with("content",$content);
    $data = ['content'=>$content,'age'=>23];
    return view('about',$data);
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');//在控制器中指定中间件
//Route::get('/home', 'HomeController@index')->name('home')->middleware("auth");
