<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/6/4
 * Time: 16:51
 */
?>
<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Weibo App') - Laravel 新手入门教程</title>
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
</head>
<body>
    @include('layouts._header')
    <div class="container">
        <div class="offset-md-1 col-md-10">
            @yield('content')
            @include('layouts._footer')
        </div>
    </div>
</body>
</html>
