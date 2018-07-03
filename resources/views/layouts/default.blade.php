<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'xingyeapp') - Laravel 新手入门</title>
    <link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
    @include('layouts._header')

    <div class="container">
        <div>
            @include('shared._messages')
            @yield('content')
            @include('layouts._footer')
        </div>
    </div>
</body>
</html>