<!DOCTYPE html>
<html>
<head>
    <title>Harambe Resturant</title>
    <link rel="stylesheet" href="css/style.css">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width" content="initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body style="background-color:#F9F9F9;">
    <div class="pageWrap">
        <div class="headerWrap">
            <header>
                <a href="index.html"><h1>Restaurant<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Harambe</h1></a> 
            </header> 
            <nav>
                <ul>
                    <li><a href="index">Hjem</a></li>
                    <li><a href="orders">Bestill</a></li>
                    <li><a href="takeAway">Takeaway</a> </li>
                    <li><a href="contact">Kontakt</a></li>
                    <li><a href="shopping_cart">Handlekurv</a></li>
            </ul>   
        </nav>
    </div>
    <p><a href="home">Logg inn</a></p>

    @yield('content')
</div>
</body>
</html>