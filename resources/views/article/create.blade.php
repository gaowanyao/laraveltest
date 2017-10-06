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

    <h3>
        新增文章
    </h3>

    <form action="{{"/articles/create"}}" method="post">

        {{csrf_field()}}
        {{--不加会报错--}}
        {{--​Laravel推荐在全局注册VerifyCsrfToken的Middleware，对所有Post,Put,Delete请求自动校验是否带合法的_csrf token。--}}
        {{--​而要在表单中添加这个Token，只需要在form中加一行： csrf_field()--}}

        <div>
            标题:
            <input type="text" name="title" value="{{old('title')}}"/>
            @if($errors->has("title"))
                {{$errors->first("title")}}
            @endif

        </div>
        <div>
            内容:
            <textarea name="content" id="" cols="30" rows="10">{{old('content')}}</textarea>
            @if($errors->has("content"))
                {{$errors->first("content")}}
            @endif

        </div>
        <div>
            <input type="submit" value="保存"/>
        </div>

    </form>

</div>





</body>
</html>