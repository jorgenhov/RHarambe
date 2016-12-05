@extends('layout.master')
@section('content')
    <div class="container-fluid">
        <form method="post" action="{{ route('login') }}">
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
                <h3 style="text-align:center;">Vennligst logg inn</h3>
                <div class="col-md-6 col-md-offset-3" style="margin-top:20px;">
                    <div class="input-group input-group-lg">
                        <input type="text" class="form-control" name="username" placeholder="Brukernavn">
                        <span class="input-group-addon"><i class="fa fa-user"></i> </span>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top:20px;">
                <div class="col-md-6 col-md-offset-3">
                    <div class="input-group input-group-lg">
                        <input type="password" class="form-control" name="password" placeholder="Passord">
                        <span class="input-group-addon"><i class="fa fa-key"></i> </span>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top:20px;">
                <div class="col-md-6 col-md-offset-3">
                    <button type="submit" class="btn btn-lg btn-success">Logg inn</button>
                    <a href="{{ route('register') }}" class="btn btn-lg btn-primary">Registrer bruker</a>
                </div>
            </div>
            {{ csrf_field() }}
        </form>
    </div>
@endsection