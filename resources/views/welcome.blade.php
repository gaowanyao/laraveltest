<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
首页
<?php echo $name;?>
<?= $name; ?>
{{$name}}


<a href="/about">关于我们</a>
<br/>
<br/>
<a href="{{url('/about')}}">关于我们</a>



</body>
</html>