
@extends('layouts.master')

@section('main')
<h1>Start Here</h1>
<div>
    <p>
    <a class="waves-effect waves-light btn-large tooltipped modal-trigger" data-position="right" 
    data-delay="50" data-tooltip="Take an order for a customer" href="#neworder">
        <i class="material-icons left">description</i>New Order</a>
    </p>
    <p>
    <a class="waves-effect waves-light btn-large tooltipped modal-trigger" data-position="right" 
    data-delay="50" data-tooltip="View the customer database" href="#customers">
        <i class="material-icons left">perm_identity</i>Customers</a>
    </p>
    <p>
    <a class="waves-effect waves-light btn-large tooltipped" data-position="right" data-delay="50" data-tooltip="View the current menu">
        <i class="material-icons left">list</i>Food Menu</a>
    </p>
</div>

<!-- New Order splash/modal -->
  <div id="neworder" class="modal">
    <div class="modal-content">
      <h4>Create a new order</h4>
      <p>Are you sure you want to create a new order?</p>
    </div>
    <div class="modal-footer">
        <button class="btn waves-effect waves-light" type="submit" name="search" action="submit">Start Order
            <i class="material-icons right">send</i>
        </button>
        <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Cancel</a>
      
    </div>
  </div>
    <!-- New Order splash/modal -->
  <div id="customers" class="modal">
    <div class="modal-content">
        <h4>Search for a customer</h4>
        <form class="col s12">
            <div class="input-field col s12">
              <input placeholder="John Smith or C1238" id="searchQuery" type="text" class="validate">
              <label for="searchQuery">Customer Details</label>
            </div>
      
    </div>
    <div class="modal-footer">
        <button class="btn waves-effect waves-light" type="submit" name="search" action="submit">Search
            <i class="material-icons right">send</i>
        </button>
        <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Cancel</a>
      
    </div>
    </form>
  </div>


@endsection

@section('sidebar')
<h1>Orders</h1>
<div style="height: 500px; overflow:auto;">
    @for ($i = 0; $i < 5; $i++)
    <div class="row">
        <div class="col s12">
            <div class="card blue-grey z-depth-2">
            <div class="card-content white-text">
                <span class="card-title">John Doe</span>
                <div class="">Status: Ready for delivery</div>
                <div class="">Type: Delivery</div>
            </div>
            <div class="card-action">
              <a href="#">View Order</a>
            </div>
            </div>
        </div>
    </div>
    @endfor
</div>

@endsection
