@extends('layouts.blank')
@section('title')
Create Order
@endsection
@section('main')


<div class = "row">
    <form class= "col s12">
        <div class = "input-field col s12">
        <input id = "cust_no" type = "text" class = "validate">
        <label for = "cust_no">Enter Phone Number:</label>
        </div>
    </form>
</div>



<div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input id="first_name" type="text" class="validate">
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Last Name</label>
        </div>
      </div>
      
      <div class="row">
        <div class="input-field col s6">
          <input id="street_address" type="text" class="validate">
          <label for="street_address">Street Address</label>
        </div>

        <div class="input-field col s6">
          <input id="suburb" type="text" class="validate">
          <label for="suburb">Town/Suburb</label>
        </div>
        </div>
     
        <div class="row">
        <div class="input-field col s6">
            <select>
              <option value="" disabled selected>Select State</option>
              <option value="1">NSW</option>
              <option value="2">QLD</option>
              <option value="3">VIC</option>
              <option value="4">TAS</option>
              <option value="5">WA</option>
              <option value="6">SA</option>
              <option value="7">ACT</option>
              <option value="8">NT</option>
            </select>
            <label></label>
        </div>
        
        <div class="input-field col s6">
          <input id="pcode" type="text" class="validate">
          <label for="pcode">Post Code</label>
        </div>
  
        </div>
 
    </form>
  </div>











@endsection