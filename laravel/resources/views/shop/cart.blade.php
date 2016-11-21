@extends('layouts.master')
@section('content')
        <table id="cart" class="table table-hover table-condensed">
            <thead>
            <tr>
                <th style="width:50%">Product</th>
                <th style="width:10%">Price</th>
                <th style="width:8%">Quantity</th>
                <th style="width:22%" class="text-center">Subtotal</th>
                <th style="width:10%"></th>
            </tr>
            </thead>
            <tbody>
            @foreach(Cart::content() as $cart)
            <tr>
                @if(is_numeric($cart->name))
                    <div class="row" style="margin-bottom: 40px;">
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
                            <a href="{{ route('order.reservation') }}"  class="btn btn-primary">Endre</a>
                            <a href="{{ route('shop.delete',['id' => $cart->id, 'rowId' => $cart->rowId]) }}" class="btn btn-danger">Slett</a>
                        </div>
                    </div>
                @else
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-10">
                                <h4 class="nomargin">{{ $cart->name }}</h4>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price">{{ $cart->price }}</td>
                    <td data-th="Quantity">
                        <input type="number" class="form-control text-center" value="{{ $cart->qty }}">
                    </td>
                    <td data-th="Subtotal" class="text-center">{{ $cart->qty * $cart->price }}</td>
                    <td class="actions" data-th="">
                        <button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
                        <a href="{{ route('shop.delete',['id' => $cart->id, 'rowId' => $cart->rowId]) }}" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></a>
                    </td>
                @endif
            @endforeach
            </tbody>
            <tfoot>
            <tr class="visible-xs">
                <td class="text-center"><strong>{{ Cart::total() }}</strong></td>
            </tr>
            <tr>
                <td><a href="{{ route('order.takeaway') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Forsett å handle</a></td>
                <td colspan="2" class="hidden-xs"></td>
                <td class="hidden-xs text-center"><strong> {{ Cart::total() }} ink.mva</strong></td>
                <td><a href="{{ route('shop.checkout') }}" class="btn btn-success btn-block">Utsjekking <i class="fa fa-angle-right"></i></a></td>
            </tr>
            </tfoot>
        </table>
@endsection