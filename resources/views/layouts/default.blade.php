<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Magia Divina</title>
    <link rel="stylesheet" href="{{asset('css/index.css')}}"/>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;800&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <nav style="position: absolute;">
            <div style="margin:15px 0 0 10px; ">
                <a href="{{''}}"><img src="{{'imgIndex/logo-nav.png'}}" alt="logo" style="max-width: 250px"></a>
            </div>
        </nav>
    </header>
    @yield('content')
</body>
</html>
