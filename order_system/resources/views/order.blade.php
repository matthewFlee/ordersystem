@extends('layouts.master')
@section('title', 'Order')
@section('main')
<h1>Create an Order</h1>

@if(Session::has('message'))
    <div class="card-panel orange">
       <h3><i class="large material-icons">error</i>{{ Session::get('message') }}</h3>
    </div>
@endif

{!! Form::open(array('action' => array('CustomerController@show'), 'method' => 'get')) !!}
<div class="row">
  <div class="input-field">
    <div class="col s8">
      {!! Form::text('customer', "#search_query")!!}
      {!! Form::label('Customer') !!}
    </div>

   <div class="col s4">
     
      {!! Form::button('<i class="material-icons left">search</i> Search',array('class' => 'waves-effect green btn' , 'name' => 'action', 'type' => 'submit'))!!}
      {!! Form::close() !!}
   </div>
   
  </div>
</div>
{!! Form::open(array('action' => 'OrderController@store')) !!}
<!-- choose the order type -->
<div class="row">
  <div class="input-field">
  <div class="col s6">
    {!! Form::select('orderType', array('delivery' => 'Delivery', 'take-away' => 'Take-away'), null, array('class' => '')) !!}
    {!! Form::label('Order Type')!!}
  </div>
</div>
</div>
<div class="row">
  <div class="input-field">
    <table id="current-order" class="bordered">
      <thead>
        <tr>
          <th>Item</th>
          <th>Amount</th>
          <th>Cost</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <td>

          </td>
          <td>Total Cost: </td>
          <td>$ 60.97</td>
        </tr>
      </tfoot>
      <tbody> 
        <tr>
          {{-- Will have logic to add these --}}
          <td>Spaghetti</td>
          <td>1</td>
          <td>$60.97</td>
        </tr>
      </tbody>
    </table>
    <a class="btn-floating btn-large waves-effect waves-light red modal-trigger" href="#show-menu"><i class="material-icons">add</i></a>
  </div>
</div>
<!-- Notes if needed -->
<div class="row">
  <div class="input-field">
    {!! Form::textarea('notes', null, array('class' => 'materialize-textarea'))!!}
    {!! Form::label('Notes') !!}
  </div>
</div>
<div class="row">
  {!! Form::button('<span class="mdi-content-send right"></span> Submit',array('class' => 'btn waves-effect waves-light', 'name' => 'action', 'type' => 'submit'))!!}
</div>
{!! Form::close() !!}

@endsection

<!-- Menu modal -->
<!-- Modal Structure -->
<!-- Modal Structure -->
  <div id="show-menu" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Modal Header</h4>
      <p>A bunch of text</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Close</a>
    </div>
  </div>
