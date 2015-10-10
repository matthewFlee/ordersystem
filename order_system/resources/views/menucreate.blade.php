@extends('layouts.master')
@section('title', 'New Item')
@section('main')
<div class="container ">
  <div class="card-panel blue lighten-2">
    <h4 class="center-align">New Menu Item</h4>
  </div>
  {!! Form::open(array('method' => 'POST','action' => 'MenuController@store')) !!}

  <!-- Errors if any-->
  @if (count($errors) > 0)
    @foreach ($errors->all() as $error)
    <script>Materialize.toast('{{ $error }}', 4000)</script>
    @endforeach
  @endif
  <!-- Start general details-->
  <p>Item Information</p>
  <hr />
  <div class="row">
    <!-- Customer name-->
    <div class="input-field col s6">
      <input id="item" name="item" type="text" class="validate">
      <label for="item">Item</label>
    </div>
    <!-- Customer Mobile Phone-->
    <div class="input-field col s6">
      <input name="price" id="price" type="text" class="validate">
      <label for="price">Price</label>
    </div>
  </div>
  <hr />
  {!! Form::button('<span class="mdi-content-send right"></span> Submit',
  array('class' => 'btn waves-effect waves-light', 'name' => 'action', 'type' => 'submit'))
  !!}

</div>
{!! Form::close() !!}
@endsection
