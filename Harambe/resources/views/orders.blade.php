@extends('layouts.mal')

@section('content')
<div class="col-md-6 border">
	<div class="col-md-offset-5"><h3><b>Retter</b></h3></div>
	<div class="row">
		<div class="col-md-6 border">
			<div class="media">
  				<div class="media-left media-top">
    				<a href="#"><img class="media-object" style="height:70px;width:70px;" src="img/Hamburger.jpg" alt="..."></a>
  				</div>
  				<div class="media-body">
    				<h4 class="media-heading"><small>#1 Harambe Burger</small></h4>
    				Den mest mongo burgeren <br> på markedet!
 				</div>
			</div>
		</div>
		<div class="col-md-6 border">
			<div class="media">
  				<div class="media-left media-top">
    				<a href="#"><img class="media-object" style="height:70px;width:70px;" src="img/Kebab.jpg" alt="..."></a>
  				</div>
  				<div class="media-body">
    				<h4 class="media-heading"><small>#2 Harambe Kebab</small></h4>
    				Den fantastiske harambe kebaben med smak av fersk harambe kjøtt!
 				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 border" style="margin-top:30px;">
			<div class="media">
  				<div class="media-left media-top">
    				<a href="#"><img class="media-object" style="height:70px;width:70px;" src="img/Taco.jpg" alt="..."></a>
  				</div>
  				<div class="media-body">
    				<h4 class="media-heading"><small>#3 Taco</small></h4>
    				En taco rett med mange fyldige smaker og har en helt unik touch over seg.
 				</div>
			</div>
		</div>
		<div class="col-md-6 border" style="margin-top:30px;">
			<div class="media">
  				<div class="media-left media-top">
    				<a href="#"><img class="media-object" style="height:70px;width:70px;" src="img/Spesial.gif" alt="..."></a>
  				</div>
  				<div class="media-body">
    				<h4 class="media-heading"><small>#4 Harambe Spesial</small></h4>
    				Vår favoritt rett. <br> Kommer med smaksgaranti.
 				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 border" style="margin-top:30px;">
			<div class="media">
  				<div class="media-left media-top">
    				<a href="#"><img class="media-object" style="height:70px;width:70px;" src="img/Nudler.jpg" alt="..."></a>
  				</div>
  				<div class="media-body">
    				<h4 class="media-heading"><small>#5 Harambe Nudler</small></h4>
    				Stekte nudler med grønnsaker og harambe.
 				</div>
			</div>
		</div>
		<div class="col-md-6 border" style="margin-top:30px;">
			<div class="media">
  				<div class="media-left media-top">
    				<a href="#"><img class="media-object" style="height:70px;width:70px;" src="img/Salat.jpg" alt="..."></a>
  				</div>
  				<div class="media-body">
    				<h4 class="media-heading"><small>#6 Harambe Salat</small></h4>
    				Salat med tomat, oliven, agurk og harambe.
 				</div>
			</div>
		</div>
	</div>
		<div class="row">
		<div class="col-md-6 border" style="margin-top:30px;">
			<div class="media">
  				<div class="media-left media-top">
    				<a href="#"><img class="media-object" style="height:70px;width:70px;" src="img/Pizza.jpg" alt="..."></a>
  				</div>
  				<div class="media-body">
    				<h4 class="media-heading"><small>#7 Harambe Pizza</small></h4>
    				Pizza med paprika, tomat og den spesielle harambe pepperonien.
 				</div>
			</div>
		</div>
		<div class="col-md-6 border" style="margin-top:30px;">
			<div class="media">
  				<div class="media-left media-top">
    				<a href="#"><img class="media-object" style="height:70px;width:70px;" src="img/Spaghetti.jpg" alt="..."></a>
  				</div>
  				<div class="media-body">
    				<h4 class="media-heading"><small>#8 Harambe Bolognese</small></h4>
    				Spaghetti, tomatsaus og harambe kjøttdeig <br> og harambe ingredienser.
 				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-offset-4">
			<p style="margin-top: 20px;">
			Velg ditt bord:
            <select> 
                <option value="Bord1">Bord 1</option>
                <option value="Bord2">Bord 2</option>
                <option value="Bord3">Bord 3</option>
                <option value="Bord4">Bord 4</option>
                <option value="Bord5">Bord 5</option>
                <option value="Bord6">Bord 6</option>
                <option value="Bord7">Bord 7</option>
                <option value="Bord8">Bord 8</option>
            </select>
           	</p>
			<p style="margin-top: 20px;">
				Velg din rett:
                <select style="width: 80px;">
                    <option value="rett1">#1</option>
                    <option value="rett2">#2</option>
                    <option value="rett3">#3</option>
                    <option value="rett4">#4</option>
                    <option value="rett5">#5</option>
                    <option value="rett6">#6</option>
                    <option value="rett7">#7</option>
                    <option value="rett8">#8</option>
                </select>
	        </p>
	        <p style="margin-top: 20px;margin-left:50px;">
	        	<button type="submit" class="btn btn-success">Legg til</button>
	        </p>
		</div>
	</div>
</div>
<div class="col-md-6 border">
	<div class="col-md-offset-5" style="margin-bottom:20px;"><h3><b>Bord</b></h3></div>
	<div class="row" style="30px;margin-left:40px;">
		<div class="col-md-3">
			<div class="table"><h3 style="margin-right:40px;">1</h3></div>
		</div>
		<div class="col-md-3">
			<div class="table"><h3 style="margin-right:40px;">2</h3></div>
		</div>
		<div class="col-md-3">
			<div class="table"><h3 style="margin-right:40px;">3</h3></div>
		</div>
	</div>
	<div class="row" style="margin-top:30px;margin-left:40px;">
		<div class="col-md-3">
			<div class="table"><h3 style="margin-right:40px;">4</h3></div>
		</div>
		<div class="col-md-3">
			<div class="table"><h3 style="margin-right:40px;">5</h3></div>
		</div>
		<div class="col-md-3">
			<div class="table"><h3 style="margin-right:40px;">6</h3></div>
		</div>
	</div>
	<div class="row" style="margin-top:30px;margin-left:40px;">
		<div class="col-md-3">
			<div class="table"><h3 style="margin-right:40px;">7</h3></div>
		</div>
		<div class="col-md-3">
			<div class="table"><h3 style="margin-right:40px;">8</h3></div>
		</div>
		<div class="col-md-3">
			<div class="table"><h3 style="margin-right:40px;">9</h3></div>
		</div>
	</div>
	<div class="row" style="margin-top:30px;margin-left:40px;">
		<div class="col-md-3">
			<div class="table"><h3 style="margin-right:40px;">10</h3></div>
		</div>
		<div class="col-md-3">
			<div class="table"><h3 style="margin-right:40px;">11</h3></div>
		</div>
		<div class="col-md-3">
			<div class="table"><h3 style="margin-right:40px;">12</h3></div>
		</div>
	</div>
</div>

@stop