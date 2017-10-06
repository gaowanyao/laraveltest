<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>博客</title>
</head>
<body>


<div>博客</div>

<div>

    <a href="{{url('/')}}">首页</a>
    <a href="{{url('/articles')}}">文章列表</a>
    <a href="{{url('/about')}}">关于我们</a>

</div>

<a href="{{url("articles/create")}}">发表文章</a>

<div>
    @foreach($articles as $article)
{{--        <div><a href="{{url("articles/2")}}">{{$article->title}}</a> </div>--}}
        <div><a href="{{url("articles",$article->id)}}">{{$article->title}}</a> </div>
    @endforeach
</div>



</body>
</html>