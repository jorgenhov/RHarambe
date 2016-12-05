@extends('layout.master')
@section('stylesheet')
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/timepicker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap-timepicker.min.css') }}">
@endsection
@section('script')
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="{{ URL::asset('lib/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('js/bootstrap-timepicker.js') }}"></script>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <form method="post" action="{{ route('table') }}">
                <div class="col-md-3 col-md-offset-2">
                    <label>Velg dato</label>
                    <div class="input-group input-group-lg" style="margin-top:20px;">
                        @if(Session::has('date'))
                            <input type="date" value="{{ Session::get('date') }}" class="form-control" name="date" placeholder="Dato">
                        @else
                            <input type="date" class="form-control" name="date" placeholder="Dato">
                        @endif
                        <span class="input-group-addon"><i class="fa fa-calendar"></i> </span>
                    </div>
                </div>
                <div class="col-md-3" style="margin-left:30px;">
                    <label>Velg tidspunkt</label>
                    <div class="input-group input-group-lg bootstrap-timepicker timepicker" style="margin-top:20px;">
                        @if(Session::has('time'))
                            <input data-provide="timepicker" type="text" name="time" value="{{ Session::get('time') }}" class="form-control" id="timepicker">
                        @else
                            <input type="text" name="time" class="form-control" id="timepicker">
                        @endif
                        <span class="input-group-addon"><i class="fa fa-clock-o"></i> </span>
                    </div>
                </div>
                <div class="col-md-3" style="margin-top:40px;">
                    <button type="submit" class="btn btn-lg btn-primary">Finn bord</button>
                </div>
                {{ csrf_field() }}
            </form>
        </div>
        <hr>
        <div class="row">
            @if(Session::has('tables'))
                <form method="post" action="">
                    <table id="cart" class="table table-hover table-condensed">
                        <thead>
                        <tr>
                            <th style="width:50%">Bord informasjon</th>
                            <th style="width:8%">Plasser</th>
                            <th style="width:22%" class="text-center">Status</th>
                            <th style="width:10%"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($reserved as $reservedTable)
                            <tr>
                                <td data-th="Product">
                                    <div class="row">
                                        <div class="col-sm-10">
                                            <h4 class="nomargin"><b> Bord nummer: </b>{{ $reservedTable->number }}</h4>
                                            <p>{{ $reservedTable->description }}</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-th="Price"><h1>{{ $reservedTable->capacity }}</h1></td>
                                <td data-th="Subtotal" class="text-center"><h1>Reservert</h1></td>
                                <td class="actions" data-th="">

                                </td>
                            </tr>
                        @endforeach
                        @foreach ($available as $availableTable)
                            <tr>
                                <td data-th="Product">
                                    <div class="row">
                                        <div class="col-sm-10">
                                            <h4 class="nomargin"><b> Bord nummer: </b>{{ $availableTable->number }}</h4>
                                            <p>{{ $availableTable->description }}</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-th="Price"><h1>{{ $availableTable->capacity }}</h1></td>
                                <td data-th="Subtotal" class="text-center"><h1>Ledig</h1></td>
                                <td class="actions" data-th="">
                                    <a href="{{ route('addToCart',['id' => $availableTable->id,'category' => 'table']) }}" class="btn btn-success btn-lg" style="margin-top:10px;">Legg til</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </form>
            @else
                Du har ikke valgt bord enda
            @endif
        </div>
        <script type="text/javascript">
            $('#timepicker').timepicker({
                showMeridian: false,
                maxHours: 24,
                minuteStep:30
            });
        </script>
    </div>
@endsection