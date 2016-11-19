<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/headermal.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('lib/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('lib/font-awesome/css/font-awesome.min.css') }}">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width" content="initial-scale=1">
    @yield('stylesheet')
</head>
    
<body>

<div class="pageWrap">
  <div class="headerWrap">       
    <header>
      <a href="index.html"><h1>Restaurant<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Harambe</h1></a> 
    </header>     
    <nav>
      <ul>
        <li><a href="{{ route('pages.index') }}">Hjem</a></li>
        <li><a href="kontakt.html">Bestill</a></li>
        <li><a href="nyheter.html">Takeaway</a></li>
        <li><a href="{{ route('pages.contact') }}">Kontakt</a></li>
        <li><a href="handlekurv.html">Handlekurv</a></li>
      </ul>   
    </nav>
	 </div>
	 @if(Auth::attempt())
    <p><a href="{{ route('user.profile')}}">Min Side</a></p>
   @else 
    <p><a href="{{ route('user.login') }}">Logg inn</a></p>
   @endif
   @yield('content')
	</div>
  @yield('scripts')
</body>
</html>