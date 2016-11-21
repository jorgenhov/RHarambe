@extends('layouts.master')
@section('content')
<div class="container">
    <h1>Endre brukerprofil</h1>
  	<hr>
	<div class="row">
      @foreach($persons as $person)
        
        <form class="form-horizontal" role="form">
          <div class="form-group">
            <label class="col-lg-3 control-label">Fornavn</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="{{ $person->firstname }}">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Etternavn</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="{{ $person->lastname }}">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Brukernavn:</label>
            <div class="col-md-8">
              <input class="form-control" type="text" value="{{ Auth::user()->username }}">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="button" class="btn btn-primary" value="Lagre">
              <span></span>
              <input type="reset" class="btn btn-default" value="Avbryt">
            </div>
          </div>
        </form>
        @endforeach
      </div>
  </div>
</div>
<hr>
@endsection