<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>我的博客</title>
</head>
<body>
    <div style="text-align: right;">
        @if($user['uid']>0)
        <span>{{$user['username']}}</span>
        <a href="">退出</a>
        @else
        <a href="">登录</a>
        <a href="">注册</a>
        @endif
    </div>
    @foreach($article_list as $article)
    <div><a href="">{{$article['title']}}</a></div>
    @endforeach
    @for($i=0;$i<count($article_list);$i++)
    @endfor
</body>
</html>