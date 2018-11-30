<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Acme</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
@include('partials.navbar')
<div class="container">
    @if(Request::is('/'))
        @include('partials.showcase')
    @endif
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-lg-8">
            @include('partials.messages')
            @yield('content')
        </div>
        <div class="col-md-4 col-lg-4">
            @include('partials.sidebar')
        </div>
    </div>
</div>

<footer id="footer" class="text-center">Copyright 2018 &copy;Acme</footer>
</body>
</html>
