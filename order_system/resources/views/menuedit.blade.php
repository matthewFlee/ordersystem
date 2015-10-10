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
      <input id="item" name="item" type="text" class="validate" value="{{ $menuitem->item or ''}}">
      <label for="item">Item</label>
    </div>
    <!-- Customer Mobile Phone-->
    <div class="input-field col s6">
      <input name="price" id="price" type="text" class="validate" value="{{$menuitem->price or ''}}">
      <label for="price">Price</label>
    </div>
  </div>
  <hr />
  {!! Form::button('<span class="mdi-content-send right"></span> Update',
  array('class' => 'btn waves-effect waves-light', 'name' => 'action', 'type' => 'submit'))
  !!}
{!! Form::close() !!}
{!! Form::open(array('method' => 'DELETE', 'route' => array('menu.destroy', $menuitem->id)))!!}
<button class="red waves-effect waves-light btn" type="submit"
onclick="return confirm('Are you sure you want to delete this menu item')">
  <i class="material-icons left">cloud</i>delete
</button>

{!! Form::close()!!}
</div>
@endsection
