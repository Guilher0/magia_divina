<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Magia Divina</title>
    <link rel="stylesheet" href="{{asset('css/index.css')}}"/>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}"/>
</head>
<body>
    <header>
        <nav style="position: absolute;">
            <div style="margin:15px 0 0 10px; ">
                <a href="{{''}}"><img src="{{'img-index/logo-nav.png'}}" alt="logo" style="max-width: 150px"></a>
            </div>
        </nav>
    </header>
    @yield('content')
</body>
</html>
