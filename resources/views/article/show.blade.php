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

<div>
    <div>{{$article->title}}</div>
    <div>{{$article->content}}</div>
</div>





</body>
</html>