@extends('layouts.master')
@section('title', 'Customer')
@section('main')
<div class="container">
  <h1>Customer Details</h1>
  <table class="bordered highlight responsive-table">
    <tr>
      <td colspan="2">Contact Information </td>
    </tr>
    <tr>
      <td>Name</td>
      <td>{{$customer->name}}</td>
    </tr>
    <tr>
      <td>Phone</td>
      <td>{{$customer->phoneMob}}</td>
    </tr>
    <tr>
      <td>Address</td>
      <td>{{$customer->address}}</td>
    </tr>
    <tr>
      <td colspan="2">Credit Card Details</td>
    </tr>
    <tr>
      <td>Card Holder</td>
      <td>{{$customer->cardHolder}}</td>
    </tr>
    <tr>
      <td>Card Number</td>
      <td>{{$customer->cardNo}}</td>
    </tr>
    <tr>
      <td>Card Expiry</td>
      <td>{{$customer->cardExpiry}}</td>
    </tr>
  </table>
</div>
@endsection
