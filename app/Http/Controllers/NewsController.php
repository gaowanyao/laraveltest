<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){

//        新增数据
//        $article = new Article();
//        $article->title = 'test article';
//        $article->content = 'test content';
//        $article->view_count = 0;
//
//        $result = $article->save();  //insert into articles(...)values(...)
//        dump($result);

//        更新数据
//        查询id=2的数据,查询返回的是对象
//        $article = Article::find(2);
////        dump($article);
////        dd($article); //框架自带的调试函数
//        $article->title = "new title data";
////        将修改之后的数据保存到数据库
//        $bool = $article->save(); // update articles set title=? where id = 2
//        dd($bool);// dd函数等价于dump($val); exit;

//        删除数据
//        删除id=1的数据
        //select * from articles where id = 3
//        $article = Article::find(1);
        //delete from articles where id = 3
//        $bool = $article->delete();
//        dd($bool);

        //select * from articles
//        $list = Article::get();
//        dd($list);

//        $list  = Article::where("title","=",'test article')->get();
//        dd($list);
        //不管查询的结果是0条，还是一条，还是多条，都是一个集合对象
        //Collection 比数组更好用的对象 称集合对象
        //可以当成数组一样来使用
//取下表为0的数据
//        dd($list[0]);

        $list = Article::get();
        foreach ($list as $item){
            //每个$item都是一个Article对象
//            dump($item);
            echo $item->id."<br/>";
            echo $item->title."<br/>";
        }

    }
}
