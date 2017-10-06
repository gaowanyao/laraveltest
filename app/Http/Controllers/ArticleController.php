<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    //文章列表
    public function index(){
        $atticles = Article::get();//查询所有文章  //前面要添加 use App\Article; 使用Article模型
        return view("article/index")->with("articles",$atticles);//把查询到的结果传递到模板中
    }

    //单篇文章详情页面
    public function show($id){
//        dump($id);
        $article = Article::find($id);
        return view("article/show")->with("article",$article);

    }

    //创建文章的页面
    public function create(){
        return view("article/create");
    }

//    github上的一个中文语言包
//https://github.com/caouecs/Laravel-lang

//The bootstrap/cache directory must be present and writable.
//php artisan cache:clear
//Cache cleared successfully.

    //保存文章
    public function store(Request $resquest){
//         dd($_POST);//可以获取内容，但我们不用这种方式
//        $title= $resquest->get("title");//get()方法能获取$_POST和$_GET方法
//        dd($title);

        //验证规则
        $rules = [
//            "title"=>"required|min:5|max:10",
            "title"=>"required|min:4",
            "content"=>"required",
        ];
        //控制器对请求中的数据进行验证
        $this->validate($resquest,$rules);

        $article = new Article();
        $article->title = $resquest->get("title");
        $article->content = $resquest->get("content");
        $article->view_count = 0;
        //当前登陆者
        $article->user_id = \Auth::id();
//        $article->save();
        if($article->save()){
            $url = url("articles",$article->id);
            return redirect($url);
        }
    }

}
