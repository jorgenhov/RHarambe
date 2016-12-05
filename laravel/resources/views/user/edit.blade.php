@extends('layout.master')
@section('content')
    <div class="container">
        <h1>Endre brukerprofil</h1>
        <hr>
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
            @foreach($persons as $person)
                <form method="post" class="form-horizontal" role="form" action="{{ route('edit') }}">
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Fornavn</label>
                        <div class="col-lg-8">
                            <input class="form-control" name="firstname" type="text" value="{{ $person->firstname }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Etternavn</label>
                        <div class="col-lg-8">
                            <input class="form-control" name="lastname" type="text" value="{{ $person->lastname }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Epost</label>
                        <div class="col-lg-8">
                            <input class="form-control" name="email" type="text" value="{{ $person->email }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Telefonnummer</label>
                        <div class="col-lg-8">
                            <input class="form-control" name="phonenumber" type="text" value="{{ $person->phonenumber }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Adresse</label>
                        <div class="col-lg-8">
                            <input class="form-control" name="adress" type="text" value="{{ $person->adress }}">
                        </div>
                    </div>
                    <div class="form-group" style="margin-top:70px;">
                        <label class="col-md-3 control-label">Brukernavn:</label>
                        <div class="col-md-8">
                            <input class="form-control" name="username" type="text" value="{{ Auth::user()->username }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label"></label>
                        <div class="col-md-8">
                            <input type="submit" class="btn btn-primary" value="Lagre">
                            <span></span>
                            <input type="reset" class="btn btn-default" value="Avbryt">
                        </div>
                    </div>
                    {{ csrf_field() }}
                </form>
            @endforeach
        </div>
    </div>
    <hr>
@endsection