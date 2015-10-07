@extends('layouts.blank')
@section('title', 'Edit Customer')

@section('main')
<div class="container ">
  <div class="card-panel blue lighten-2">
    <h4 class="center-align">CUSTOMER NAME</h4>
  </div>
  @if (true)
  {!! Form::open(array('action' => 'CustomerController@update')) !!}
  @endif
  <!-- Start general details-->
  <p>Contact Information</p>
  <hr />
  <div class="row">
    <!-- Customer name-->
    <div class="input-field col s6">
      <i class="material-icons prefix">account_circle</i>
      <input id="name" type="text" class="validate">
      <label for="name">First Name</label>
    </div>
    <!-- Customer Mobile Phone-->
    <div class="input-field col s6">
      <i class="material-icons prefix">phone</i>
      <input id="phoneMob" type="text" class="validate">
      <label for="phoneMob">Mobile Phone</label>
    </div>
  </div>
  <div class="row">
    <!-- Customer Address-->
    <div class="input-field col s6">
      <input id="addrStreet" type="text" class="validate">
      <label for="addrStreet">Number &amp; Street</label>
    </div>
    <div class="input-field col s3">
      <input id="addrSuburb" type="text" class="validate">
      <label for="addrSuburb">Suburb</label>
    </div>
    <div class="input-field col s3">
      <input id="addrPostcode" type="text" class="validate">
      <label for="addrPostcode">Postcode</label>
    </div>
  </div>
  <p>Credit Card Details</p>
  <hr />
  <div class="row">
    <div class="input-field col s6">
      <input id="cardHolder" type="text" class="validate">
      <label for="cardHolder">Card Holder's Name</label>
    </div>
    <div class="input-field col s6">
      <input id="cardNo" type="text" class="validate">
      <label for="cardNo">Card Number</label>
    </div>
  </div>
  <div class="row">
    <!-- Card Month -->
    <div class="input-field col s4">
      <select>
        <option value="01">January</option>
        <option value="02">February</option>
        <option value="03">March</option>
        <option value="04">April</option>
        <option value="05">May</option>
        <option value="06">June</option>
        <option value="07">July</option>
        <option value="08">August</option>
        <option value="09">September</option>
        <option value="10">October</option>
        <option value="11">November</option>
        <option value="12">December</option>
      </select>
      <label>Expiry Month</label>
    </div>
    <!-- Card Year -->
    <div class="input-field col s4">
      <select>
        <option value="2015">2015</option>
        <option value="2016">2016</option>
        <option value="2017">2017</option>
        <option value="2018">2018</option>
        <option value="2019">2019</option>
        <option value="2020">2020</option>
      </select>
      <label>Expiry Year</label>
    </div>
    <div class="input-field col s4">
      <input id="cardNo" type="text" class="validate">
      <label for="cardNo">CCV</label>
    </div>
  </div>
  <!-- End general details-->
  <hr />
  {!! Form::button('<span class="mdi-content-send right"></span> Submit',
  array('class' => 'btn waves-effect waves-light', 'name' => 'action', 'type' => 'submit'))
  !!}

</div>
{!! Form::close() !!}
@endsection
