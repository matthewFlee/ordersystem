@extends('layouts.master')
@section('title', 'Order')
@section('main')
<div class="container">
  <div class="row">
    <h1>All Orders</h1>
  </div>
<!-- Order Cards -->
<div class="row">
    <div class="col s12">
        <div class="card blue-grey z-depth-2">
        <div class="card-content white-text">
            <span class="card-title">{{$order->name}}</span>
            <div class="">Time: {{date('m-d h:i a', strtotime($order->created_at))}}</div>
            <div class="">Status: {{ucfirst($order->status)}}</div>
            <div class="">Type: {{ucfirst($order->type)}}</div>
            <!--Items on the order below-->
            <table>
              <thead>
                <td>Item ID</td>
                <td>Item</td>
                <td>Quanity</td>
                <td>Price</td>
              </thead>
              @foreach ($order_items as $item)
              <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->item}}</td>
                <td>{{$item->quantity}}</td>
                <td>{{$item->price}}</td>
              </tr>
              @endforeach
              <tr>
                <td></td>
                <td></td>
                <td>Total Price:</td>
                <td>${{$order_sum}}</td>
              </tr>
            </table>
        </div>
        <div class="card-action">
          <a href="/customers/{{$order->c_id}}">View Customer</a>
        </div>
        </div>
    </div>
</div>
</div>
@endsection
