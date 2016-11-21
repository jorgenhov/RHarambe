@extends('layouts.master')
@section('stylesheet')
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/contact.css') }}">
@endsection
@section('script')
    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <script>
        function initialize() {
            var mapProp = {
                center:new google.maps.LatLng(74.452542, 19.110846),
                zoom:9,

                mapTypeId:google.maps.MapTypeId.ROADMAP
            };

            var contentString = '<div id="content">'+'<h3>Resturant Harambe</h3>'+'</div>';

            var infowindow = new google.maps.InfoWindow({
                content: contentString
            });

            var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(74.352325, 19.063478),
                map: map,
                animation: google.maps.Animation.DROP,
                title: 'Marinas'
            });

            marker.addListener('click', function(){
                infowindow.open(map, marker);
            });

        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
@endsection
@section('content')
    <section>
        </article>

        <article class="generelKontakt">
            <h1>Generelle henvendelser</h1>
            <p>Telefon: 992 74 BANAN</br>
                E-post: <a href="#">kontakt-harambe@harmbe.com</a></br></br>
                Restaurant Harambe</br>
                Bjørnøya-sør</br>
                Svalbard - Jan Mayen</br></br>
                Åpningstider:</br>
                Man-Tor: 10:00 - 23:00</br>
                Fre-Søn: 10:00 - 04:00
            </p>
        </article>

        <div class="mapWrap">
            <div id="googleMap"></div>
        </div>
    </section>
@endsection