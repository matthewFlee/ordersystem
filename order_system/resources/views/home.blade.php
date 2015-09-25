@extends('layouts.master')
@section('title')
Home
@endsection
@section('main')
<h1 class="center-align">Start Here</h1>
<div id="main-menu">
  <div class="row">
    <!-- Card 1 -->
    <div class="col s12 m6 l4">
      <a href="#neworder"  class="modal-trigger">
      <div class="card">
        <div class="card-content  green white-text">
          <h4 class="center-align">Start Order</h4>
        </div>
      </div>
      </a>
    </div>
    <!-- Card 2-->
    <div class="col s12 m6 l4">
      <a href="customers">
      <div class="card">
        <div class="card-content  blue white-text">
          <h4 class="center-align">Customers</h4>
        </div>
      </div>
      </a>
    </div>
    <!-- Card 3 -->
    <div class="col s12 m6 l4">
      <a href="menu">
      <div class="card">
        <div class="card-content  orange white-text">
          <h4 class="center-align">Menu</h4>
        </div>
      </div>
      </a>
    </div>
    <!-- End Cards -->
  </div>
</div>

<!-- New Order splash/modal -->
  <div id="neworder" class="modal">
    <div class="modal-content">
      <h4>Create a new order</h4>
      <p><h5>What sort of order do you want to create?</h5></p>
      <div class="row">
        <!-- Card 1 -->
        <div class="col s12 m6 l6">
          <a href="order/create"  class="modal-trigger">
          <div class="card">
            <div class="card-content  light-green white-text">
              <h4 class="center-align">Takeaway</h4>
            </div>
          </div>
          </a>
        </div>
        <!-- Card 2-->
        <div class="col s12 m6 l6">
          <a href="order/create">
          <div class="card">
            <div class="card-content  light-blue white-text">
              <h4 class="center-align">Delivery</h4>
            </div>
          </div>
          </a>
        </div>
        <!-- End Cards -->
      </div>
    </div>
    <div class="modal-footer">
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

@parent

@endsection
