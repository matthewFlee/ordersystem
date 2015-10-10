@extends('layouts.blank')
@section('title', 'Orders')
@section('main')
<div class="container">
  <div class="row">
    <h1>All Orders</h1>
  </div>
<!-- Order Cards -->
@foreach ($sOrders as $sOrder)
<div class="row">
    <div class="col s12">
        <div class="card blue-grey z-depth-2">
        <div class="card-content white-text">
            <span class="card-title">{{$sOrder->name}}</span>
            <div class="">Time: {{date('m-d h:i a', strtotime($sOrder->created_at))}}</div>
            <div class="">Status: {{ucfirst($sOrder->status)}}</div>
            <div class="">Type: {{ucfirst($sOrder->type)}}</div>
        </div>
        <div class="card-action">
          <a href="{{route('customers.show', ['id' => $sOrder->c_id])}}">View Customer</a>
          <a href="{{route('orders.show', ['id' => $sOrder->id])}}">View Order</a>
        </div>
        </div>
    </div>
</div>
@endforeach
</div>

@endsection
