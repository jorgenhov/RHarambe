<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="css/headerMal.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <script type="text/javascript" src=" https://code.jquery.com/jquery-3.1.1.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
	@yield('stylesheet')
	@yield('script')
</head>
<body>
<div class="pageWrap">
	<div class="headerWrap">       
		<header>
    		<a href="index.html"><h1>Restaurant<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Harambe</h1></a> 
		</header>    
		 	<nav>
    		<ul>
      	 		<li><a href="hjem">Hjem</a></li>
				<li><a href="retter">Bestill</a></li>
      			<li><a href="takeaway">Takeaway</a></li>
       			<li><a href="kontakt">Kontakt</a></li>
       			<li><a href="handlekurv">Handlekurv</a></li>
    		</ul>
      	</nav>
	</div>
	<p><a href="home">Logg inn</a></p>

	<section>
		@yield('content')
	</section>
	<footer>
		@yield('footer')
	</footer>
</div>
</body>
</html>