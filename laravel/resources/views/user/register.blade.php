@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <form role="form" method="POST" action="{{ route('user.register') }}">
                    @if(count($errors) > 0)
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $error)
                                <p>{{$error}}</p>
                            @endforeach
                        </div>
                    @endif
                    <legend class="text-center" >Register</legend>
                    <fieldset style="margin-top: 20px;">
                        <legend>Pålogging informasjon</legend>

                        <div class="form-group col-md-12">
                            <label for="first_name">Brukernavn</label>
                            <input type="text" class="form-control" name="username" id="first_name" placeholder="Brukernavn">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="confirm_password">Bekreft passord</label>
                            <input type="password" class="form-control" name="re_password" id="confirm_password" placeholder="Bekreft passord">
                        </div>

                    </fieldset>

                    <fieldset style="margin-top: 20px;">
                        <legend>Brukerkonto informasjon</legend>

                        <div class="form-group col-md-6">
                            <label for="first_name">Fornavn</label>
                            <input type="text" class="form-control" name="firstname" id="first_name" placeholder="Fornavn">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="first_name">Etternavn</label>
                            <input type="text" class="form-control" name="lastname" id="first_name" placeholder="Etternavn">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="first_name">Epost</label>
                            <input type="text" class="form-control" name="email" id="first_name" placeholder="Epost">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="first_name">Telefon nummer</label>
                            <input type="text" class="form-control" name="phonenumber" id="first_name" placeholder="Telefonnummer">
                        </div>

                        <div class="form-group col-md-12">
                            <label for="first_name">Adresse</label>
                            <input type="text" class="form-control" name="adress" id="first_name" placeholder="Adresse">
                        </div>
                    </fieldset>


                    <div class="form-group-lg">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-lg btn-primary">
                                Register
                            </button>
                            <a href="#">Already have an account?</a>
                        </div>
                    </div>
                        {{ csrf_field() }}
                </form>
            </div>

        </div>
    </div>
@endsection