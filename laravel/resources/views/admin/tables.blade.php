@extends('layout.admin')
@section('title')
    Tabeller
    @endsection
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            Alle ordre
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                <tr>
                    <th>Opprettet</th>
                    <th>Ordre ID</th>
                    <th>Dato</th>
                    <th>Tidspunkt</th>
                    <th>PersonID</th>
                </tr>
                </thead>
                <tbody>
                @foreach($orders as $order)
                    <tr class="odd gradeX">
                        <td>{{ $order->created_at }}</td>
                        <td>{{ $order->order_id }}</td>
                        <td>{{$order->date}}</td>
                        <td class="center">{{ $order->time }}</td>
                        <td class="center">{{ $order->ref_person_id }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <!-- /.table-responsive -->
        </div>
        <!-- /.panel-body -->
    </div>
    <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Alle kunder
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Fornavn</th>
                                <th>Etternavn</th>
                                <th>Epost</th>
                                <th>Mobilnummer</th>
                                <th>Adresse</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($persons as $person)
                                <tr>
                                    <td>{{ $person->id }}</td>
                                    <td>{{ $person->firstname }}</td>
                                    <td>{{ $person->lastname }}</td>
                                    <td>{{ $person->email }}</td>
                                    <td>{{ $person->phonenumber }}</td>
                                    <td>{{ $person->adress }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Alle registrerte brukere
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Brukernavn</th>
                                <th>Bruker ID</th>
                                <th>Opprettet</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->username }}</td>
                                    <td>{{ $user->user_id }}</td>
                                    <td>{{ $user->created_at }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-6 -->

    @endsection