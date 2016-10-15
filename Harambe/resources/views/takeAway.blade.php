@extends('layouts.mal')

@section('content')

<div class="col-md-10 col-md-offset-1">
<h2>TakeAway</h2>

Vi har også en take away meny på diverse retter.seperat, og en database for take away. Vi vil og ha en database der vi lagrer og registrerer nye brukere. 
Det vil bli satt opp en ukeplan for hver uke, der vil vi ha et felt for hver av oss, slik at vi enkelt har kontroll på hva som skal gjøres og hva som er blitt gjort.
kommer til å sette opp et estimat over hvor mange timer vi kommer til å bruke. I oppgave deligeringa vil vi ta utgangspunkt i de sterke og svake sidene til hver og en, slik at alle får ansvar innenfor områder de er gode i.
Men vi vil og fokusere mye på de svake sidene, slik at alle får prøvd seg på alt og får en god forståelse for alle oppgavene som er i et slikt prosjekt.
</div>


	<div class="col-md-8 col-md-offset-2 border" style="margin-top:60px;">
		<div class="col-md-offset-5"><h3><b>Retter</b></h3></div>
			<div class="row">
				<div class="col-md-6 border">
					<div class="media">
		  				<div class="media-left media-top">
		    				<a href="#"><img class="media-object" style="height:150px;width:150px;" src="img/Hamburger.jpg" alt="..."></a>
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
		    				<a href="#"><img class="media-object" style="height:150px;width:150px;" src="img/Kebab.jpg" alt="..."></a>
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
		    				<a href="#"><img class="media-object" style="height:150px;width:150px;" src="img/Taco.jpg" alt="..."></a>
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
		    				<a href="#"><img class="media-object" style="height:150px;width:150px;" src="img/Spesial.gif" alt="..."></a>
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
		    				<a href="#"><img class="media-object" style="height:150px;width:150px;" src="img/Nudler.jpg" alt="..."></a>
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
		    				<a href="#"><img class="media-object" style="height:150px;width:150px;" src="img/Salat.jpg" alt="..."></a>
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
		    				<a href="#"><img class="media-object" style="height:150px;width:150px;" src="img/Pizza.jpg" alt="..."></a>
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
		    				<a href="#"><img class="media-object" style="height:150px;width:150px;" src="img/Spaghetti.jpg" alt="..."></a>
		  				</div>
		  				<div class="media-body">
		    				<h4 class="media-heading"><small>#8 Harambe Bolognese</small></h4>
		    				Spaghetti, tomatsaus og harambe kjøttdeig <br> og harambe ingredienser.
		 				</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-offset-5">
					<button class="btn btn-success">Legg til</button>
				</div>
			</div>
		</div>
			<div class="col-md-4 col-md-offset-4 border" style="margin-top:60px;">
		<div class="row">
				<h4 style="margin-left:40%;"><b>Drikkemeny</b></h4>
				<div class="media">
		  			<div class="media-left media-top">
		    			<a href="#"><img class="media-object" style="height:150px;width:150px;" src="http://i149.photobucket.com/albums/s49/evereen06/gorilladrinking.jpg" alt="..."></a>
		  			</div>
		  			<div class="media-body">
		    			<div class="media-heading">
		    				<select>
                    			<option value="Antall0">Cola</option>				 
                    			<option value="Antall1">Pepsi</option>
                    			<option value="Antall2">Fanta</option>
                    			<option value="Antall3">Ananas brus</option>
                    			<option value="Antall4">Cola zero</option>
                    			<option value="Antall5">Sprite</option>
                    			<option value="Antall6">Olden</option>   
                			</select>
		    			</div>
		    			<button type="submit" class="btn btn-success">Legg til</button>
		    		</div>
				</div>
			</div>
		</div>
	</div>
@stop