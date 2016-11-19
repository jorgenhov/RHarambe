@extends('layouts.master')
@section('stylesheet')
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/profile.css') }}">
@endsection
@section('content')
    <section>

        <h2>Min side</h2>
        <br>
        <br>

        <div class="divshadowbox">

            <section>
                <h3>Min profil</h3>
                <a href="endrePassord.html">Endre passord</a>
                <br>
                <br>
                <a href="endreAdresse.hmtl">Endre adresse</a>
                <br>
                <br>
                <a href="{{ route('user.logout') }}">Logg ut</a>
            </section>

        </div>

        <div class="divprofil">

            <section class="profil">
                <h3>Mine ordre</h3>
                <a class="Pprofil" href="aktiveOrdrer.html">Aktive ordrer</a>
                <br>
                <br>
                <a class ="Pprofil" href="ordreHistorikk.html">Ordre historikk</a>
            </section>
        </div>

        <br>
        <br>
        <br>
        </div>


        </div>
        <p><a href="login.html">Logg inn</a></p>
        </div>
@endsection