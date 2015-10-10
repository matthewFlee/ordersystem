@extends('layouts.master')
@section('title', $menuitem->item)
@section('main')
<div class="container ">
  <div class="card-panel blue lighten-2">
    <h4 class="center-align">{{ $menuitem->item or 'New Customer'}}</h4>
  </div>
  {!! Form::model($menuitem, array('method' => 'PUT', 'route' => array('menu.update', $menuitem->id))) !!}

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
      <input id="name" name="name" type="text" class="validate" value="{{ $menuitem->item or ''}}">
      <label for="name">Item</label>
    </div>
    <!-- Customer Mobile Phone-->
    <div class="input-field col s6">
      <input name="phoneMob" id="phoneMob" type="text" class="validate" value="{{$menuitem->price or ''}}">
      <label for="phoneMob">Price</label>
    </div>
  </div>
  <hr />
  {!! Form::button('<span class="mdi-content-send right"></span> Update',
  array('class' => 'btn waves-effect waves-light', 'name' => 'action', 'type' => 'submit'))
  !!}

</div>
{!! Form::close() !!}
@endsection
