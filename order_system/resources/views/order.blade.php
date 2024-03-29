@extends('layouts.master')
@section('title', 'Order')
@section('main')

<h1>Create an Order</h1>

@if(Session::has('message'))
    <div class="card-panel orange">
       <h3><i class="large material-icons">error</i>{{ Session::get('message') }}</h3>
    </div>
@endif


{!! Form::open(array('action' => 'CustomerController@search', 'name'=>'action')) !!}
<div class="row">
  <div class="input-field">
    <div class="col s8">

      @if( isset($cust))
        <div class="chip">

          @foreach($cust as $c)
            {{ $c->name }}
            <?php $id = $c->id; ?>
          @endforeach

        </div>
      @else
        {!! Form::text('phone', "")!!}
        {!! Form::label('phone', 'Search customers via phone number') !!}
      @endif
    </div>

   <div class="col s4">
     <!-- {!! Form::submit('Search') !!} -->
       {!! Form::button('<span class=""><i class="small material-icons">search</i></span> Search',array('class' => 'btn waves-effect waves-light', 'name' => 'action', 'type' => 'submit'))!!}
      {!! Form::close() !!}
   </div>

  </div>
</div>

@if(isset($cust))

{!! Form::open(array('action' => 'OrderController@store', 'name' => 'action', 'id' =>'o_createForm')) !!}

      {!! Form::hidden('cust_id',  $id ) !!}
      {!! Form::hidden('status', 'new') !!}

<!-- choose the order type -->
<div class="row">
  <div class="input-field">
  <div class="col s6">
    {!! Form::select('orderType', array('delivery' => 'Delivery', 'take-away' => 'Take-away'), null) !!}
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
          <td></td>
          <td>Total Cost: </td>
          <td id="totalPrice">0</td>
        </tr>
      </tfoot>
      <tbody id="orderContent">
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
  {!! Form::button('<span class="mdi-content-send right"></span> Submit',array('class' => 'btn waves-effect waves-light', 'onclick' => "$('#o_createForm').submit(); return false;", 'id' => 'formSubmit'))!!}
</div>
{!! Form::close() !!}
    @endif
@endsection

<!-- Menu modal -->
<!-- Modal Structure -->
  <div id="show-menu" class="modal modal-fixed-footer">
    <div class="modal-content">
      <table id="menutable"class="bordered">
          <thead>
              <tr>
                  <th data-field="id">Item ID</th>
                  <th data-field="name">Name</th>
                  <th data-field="cost">Cost</th>
              </tr>
          </thead>
          <tbody>
              @foreach($items as $item)
              <tr>
                  <td class="itemid">{{ $item->id }}</td>
                  <td class="menuitem">{{ $item->item}}</td>
                  <td class="itemprice">${{$item->price}}</td>
                  <td class=""><a class="btn-floating btn-small waves-effect waves-light red additem"><i class="material-icons">add</i></a></td>
              </tr>
              @endforeach
          </tbody>
      </table>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Close</a>
    </div>

  </div>
