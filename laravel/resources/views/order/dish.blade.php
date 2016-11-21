@extends('layouts.master')
@section('stylesheet')
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/takeaway.css') }}">
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
                <div class="col-md-3">
                    <label>Valgt dato</label>
                    <div class="input-group input-group-lg" style="margin-top:20px;">
                            <input type="date" value="{{ Session::get('date') }}" class="form-control" name="date" placeholder="Dato" readonly>
                        <span class="input-group-addon"><i class="fa fa-calendar"></i> </span>
                    </div>
                </div>
                <div class="col-md-2" style="margin-left:30px;">
                    <label>Valgt tidspunkt</label>
                    <div class="input-group bootstrap-timepicker timepicker input-group-lg" style="margin-top:20px;">
                            <input name="time" value="{{ Session::get('time') }}" type="text" class="form-control" id="timepicker" readonly>
                        <span class="input-group-addon"><i class="fa fa-clock-o"></i> </span>
                    </div>
                </div>
                <div class="col-md-2">
                    <label>Valgt bord</label>
                    <h1 style="margin-left: 30px;">{{ Session::get('table') }}</h1>
                </div>
                <div class="col-md-4" style="margin-top:40px;">
                    <a href="{{ route('order.reservation') }}"  class="btn btn-lg btn-primary">Endre</a>
                </div>
            </div>
            <div class="row">
            <hr>
                <div class="row">
                    <div class="col-md-12">
                        @if(Session::has('added'))
                            <div class="alert alert-info">
                                {{ Session::get('added') }}
                            </div>
                        @endif
                    </div>
                </div>
            <div id="wrapper">
                <div id="rettArtikkel">
                    <h2 id="retterHeader">Retter</h2>
                    @foreach($firstRow as $product)
                    <div class="retter">
                        <img class="rettBilde" src="{{ URL::to( $product->imagePath) }}"/>
                        <p class="rettSkrift"><b>{{ $product->name }}</b><br>{!! nl2br(e(str_replace("<br />","\n",$product->description))) !!}</p>
                        <form><a href="{{ route('shop.reservation',['id' => $product->dishID]) }}" class="btn btn-danger btn-xs">Legg til</a></form>
                    </div>
                    @endforeach
                    <div id="rettArtikkel2">
                        @foreach($secondRow as $items)
                        <div class="retter2">
                            <img class="rettBilde" src="{{ URL::to( $items->imagePath) }}"/>
                            <p class="rettSkrift"><b>{{ $items->name }}</b><br> {!! nl2br(e(str_replace("<br />","\n",$items->description))) !!}</p>
                            <form><a href="{{ route('shop.reservation',['id' => $items->dishID]) }}" class="btn btn-danger btn-xs">Legg til</a></form>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection