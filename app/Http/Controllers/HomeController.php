<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //注册中间件
        //auth中间件，是检查是否登录
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //当前用户id
//        echo  \Auth::id(); //没有use要加“\”
//        echo  \Auth::user();// 输出当前用户对象
//        echo  \Auth::user()->id;// 输出当前用户姓名
//        echo  \Auth::user()->name;// 输出当前用户姓名
//        echo  \Auth::user()->email;// 输出当前用户姓名

        //手工检查是否登录
        if(\Auth::check()){
            echo "logind";
        }else{  //没有登录的情况下
            //跳转到login页面
            return redirect("login");
            exit;
        }

        return view('home');
    }
}
