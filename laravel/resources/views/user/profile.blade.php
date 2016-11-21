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
                <br>
                <a href="{{ route('user.edit')}}">Endre profil</a>
                <br>
                <br>
                <a href="{{ route('user.logout') }}">Logg ut</a>
            </section>

        </div>

        <div class="divprofil">

            <section class="profil">
                <h3>Mine ordre</h3>
                <a class="Pprofil" href="{{ route('user.orders')}}">Mine ordrer</a>
                <br>
                <br>
            </section>
        </div>

        </div>
        <p><a href="login.html">Logg inn</a></p>
        </div>
@endsection