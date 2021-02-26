<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style="text-align: center;margin-top:50px;"><h1>{{$title}}</h1></div>

    <div style="margin-top: 30px;padding:100px">
    <!-- 如果输出的内容中有标签 则不需要e函数转化,可以使用下面方式 -->
    {!!$contents!!}
    </div>



    <!-- 原样输出 在前面加个@ -->
    <div>@{{price}}</div>


</body>
</html>