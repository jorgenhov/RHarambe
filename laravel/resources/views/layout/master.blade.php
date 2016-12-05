<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width" content="initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/headermal.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('lib/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('lib/font-awesome/css/font-awesome.min.css') }}">
    @yield('stylesheet')
    @yield('script')
</head>

<body>

<div class="pageWrap">
    <div class="headerWrap">
        <header>
            <a style="text-decoration: none;color:white;"><h1>Restaurant<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Harambe</h1></a>
        </header>
        <nav>
            <ul>
                <li><a href="{{ route('index') }}">Hjem</a></li>
                <li><a href="{{ route('table') }}">Bestill</a></li>
                <li><a href="{{ route('takeaway') }}">Takeaway</a></li>
                <li><a href="{{ route('contact') }}">Kontakt</a></li>
                <li><a href="{{ route('cart') }}">Handlekurv</a></li>
            </ul>

        </nav>
    </div>
    <p>
        @if(Auth::check())
            <a style="text-decoration: none;" href="{{ route('profile') }}">Min Side</a>
        @else
            <a style="text-decoration: none;" href="{{ route('login') }}">Logg inn</a>
        @endif
    </p>

    @yield('content')
</div>

</body>
</html>