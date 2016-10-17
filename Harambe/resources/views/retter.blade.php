@extends('layouts.default')

@section('stylesheet') <link rel="stylesheet" type="text/css" href="css/retter.css"> @stop


@section('content')
	
        <div id="rettArtikkel">
            <h2 id="retterHeader">Retter</h2>
            
            <div class="retter">
                <img class="rettBilde" alt="Harambe burger" src ="https://gfx.nrk.no/7bhJYqzZ47LlTI1GmVK4EgUiIxStKj15j235pHP_VV3g" /> <p class="rettSkrift"><b>#1 Harambe Burger</b><br> Den mest mongo<br> burgeren på <br>markedet!</p>
            </div>
             <div class="retter">
                 <img class="rettBilde" alt="Harambe kebab" src ="http://kebablaunion.es/wp-content/uploads/2015/12/kebab-durum-rollo.jpg"/> <p class="rettSkrift"><b>#2 Harambe Kebab</b><br> Den fantastiske<br> harambe kebaben<br> med smak av fersk<br> harambe kjøtt!</p>
            </div>
             <div class="retter">
                 <img class="rettBilde" alt="Harambe Taco" src ="http://static.klikk.no/recipe/2012.10.22/50850512eff0b1b161a39443/pannekaker_BIG.jpg"/> <p class="rettSkrift"><b>#3 Taco</b><br> En taco rett<br> med mange fyldige<br> smaker og har<br> en helt unik <br> touch over seg.</p>
            </div>
             <div class="retter">
                <img class="rettBilde" alt="nammenam" src ="https://brandofitness.files.wordpress.com/2010/06/food-special-placeholder.gif"/> <p class="rettSkrift"><b>#4 Harambe Spesial</b><br> Vår favoritt rett. <br>Kommer med<br> smaksgaranti.</p>
            </div>
            
            <div id="rettArtikkel2">
                <div class="retter2">
                <img class="rettBilde" alt="Harambe nudler" src ="http://vegetarguide.no/sites/vegetarguide.no/files/imagecache/Fullsize-640x480/images/node/nudler-med-tofu-708-533.jpg"/> <p class="rettSkrift"><b>#5 Harambe Nudler</b><br> Stekte nudler med <br>grønnsaker og harambe.</p>
            </div>
             <div class="retter2">
                 <img class="rettBilde" alt="Harambe salt" src ="https://res.cloudinary.com/norgesgruppen/image/upload/c_fit,f_auto,h_604,q_80,w_604/fvjo3ocdrljqmhrwzbn1.jpg"/> <p class="rettSkrift"><b>#6 Harambe Salat</b><br> Salat med tomat,<br> oliven, agurk og<br> harambe.</p>
            </div>
             <div class="retter2">
                 <img class="rettBilde" alt="Harambe pizza" src ="http://cookdiary.net/wp-content/uploads/images/Pizza.jpg"/> <p class="rettSkrift"><b>#7 Harambe Pizza</b><br> Pizza med paprika,<br> tomat og den<br> spesielle harambe<br> pepperonien. </p>
            </div>
             <div class="retter2">
                 <img class="rettBilde" alt="Harambe bolognese" src ="http://www.errenskitchen.com/wp-content/uploads/2015/02/spaghetti-bolognese-8-of-1.jpg"/> <p class="rettSkrift"><b>#8 Harambe Bolognese</b><br> Spaghetti, tomatsaus <br> og harambe<br> kjøttdeig.</p>
            </div>
                
            </div>
        </div>
        
        <div id='bordArtikkel'>
            <h2 id="bordHeader">Bord</h2>
            <div class="bord">
                <p>Bord 1</p>
            </div>
            <div class="bord">
                <p>Bord 2</p>
            </div>
            <div class="bord">
                <p>Bord 3</p>
            </div>
            <div class="bord">
                <p>Bord 4</p>
            </div>
            
            <div id="BordArtikkel2">
                <div class="bord2">
                <p>Bord 5</p>
            </div>
            <div class="bord2">
                <p>Bord 6</p>
            </div>
            <div class="bord2">
                <p>Bord 7</p>
            </div>
            <div class="bord2">
                <p>Bord 8</p>
            </div>
            </div>
        </div>
            
            <div id="bestillingBoks">
            <form id="bestilling">
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
                <br><br>Velg din rett:
                <select>
                    <option value="rett1">#1</option>
                    <option value="rett2">#2</option>
                    <option value="rett3">#3</option>
                    <option value="rett4">#4</option>
                    <option value="rett5">#5</option>
                    <option value="rett6">#6</option>
                    <option value="rett7">#7</option>
                    <option value="rett8">#8</option>
                </select>
                <br><br><input type="submit" value="Submit">
                
            </form>
            </div>
             
@stop