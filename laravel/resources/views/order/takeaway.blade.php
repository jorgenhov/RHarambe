@extends('layout.master')
@section('stylesheet')
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/takeaway.css') }}">
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="jumbotron">
                <h1 style="margin-left:20px;">Take away</h1>
                <p style="margin-left:20px;">En unik mulighet til å bestille mat av Harambe kvalitet på bare noen få minutter. <br>
                    Med vår unike bestillingsmetode mener vi at vi er en av de beste innen dette feltet. <br>
                    Harambe var kjent for sin hurtighet og derfor har vi som mål å være den av resturantene i verden som får mat av topp kvalitet klar til raskest tid.</p>
            </div>
        </div>
        <div class="row">
            @if (Session::has('error'))
                <div class="alert alert-danger">
                    {{ Session::get('error') }}
                </div>
            @elseif (Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif
            <div id="wrapper">
                <div id="rettArtikkel">
                    <h2 id="retterHeader">Retter</h2>
                    @foreach($firstRow as $firstItem)
                        <div class="retter">
                            <img class="rettBilde" src="{{ URL::to( $firstItem->imagePath) }}"/>
                            <p class="rettSkrift"><b>{{ $firstItem->name }}</b><br> {!! nl2br(e(str_replace( "<br />", "\n", $firstItem->description))) !!}</p>
                            <form><a href="{{ route('addToCart',['id' => $firstItem->id,'category' => 'food']) }}" type="button" class="btn btn-success">Legg til</a></form>
                        </div>
                    @endforeach
                    <div id="rettArtikkel2">
                        @foreach($secondRow as $secondItem)
                            <div class="retter2">
                                <img class="rettBilde" src="{{ URL::to( $secondItem->imagePath) }}"/>
                                <p class="rettSkrift"><b>{{ $secondItem->name }}</b><br>{!! nl2br(e(str_replace("<br />", "\n", $secondItem->description))) !!}<br></p>
                                <form><a href="{{ route('addToCart',['id' => $secondItem->id,'category' => 'food']) }}" class="btn btn-success">Legg til</a></form>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection