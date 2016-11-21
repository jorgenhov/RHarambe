@extends('layouts.master')
@section('content')
<div class="container">
  <h2>Dine bordrer</h2>
  <p>Her kan du få oversikt over alle dine ordrer</p>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>OrdreID</th>
        <th>Dato</th>
        <th>Tid</th>
      </tr>
    </thead>
    <tbody>
    @foreach($orders as $order)
    	@if(empty($orders))
              <div class="alert alert-info">
          Du har ingen ordrer
        </div>
    	@else 
        <tr>
          <td>{{ $order->orderID }}</td>
          <td>{{ $order->time }}</td>
          <td>{{ $order->date }}</td>
        </tr>
    	@endif
    @endforeach
    </tbody>
  </table>
</div>
@endsection