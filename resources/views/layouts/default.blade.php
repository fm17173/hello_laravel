<!doctype html>
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Weibo App') - Laravel 新手入门教程</title>
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
</head>
<body>
<nav class="navbar navbar-expand navbar-dark bg-dark">
    <div class="container">
        <a href="/" class="navbar-brand">Weibo App</a>
        <ul class="navbar-nav justify-content-end">
            <li class="nav-item"><a href="/help" class="nav-link">帮助</a></li>
            <li class="nav-item"><a href="#" class="nav-link">登录</a></li>
        </ul>
    </div>
</nav>
@yield('content')
</body>
</html>