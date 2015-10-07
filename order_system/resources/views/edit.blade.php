@extends('layouts.blank')
@section('title', 'Customer')

@section('main')
<div class="container ">
  <div class="card-panel blue lighten-2">
    <h4 class="center-align">{{ $customer->name or 'New Customer'}}</h4>
  </div>
  <!-- use this form if editing customer -->
  @if ($type == 'edit')
  <!-- {!! Form::open(array('action' => 'CustomerController@update')) !!} -->
  {!! Form::model($customer, array('method' => 'PUT', 'route' => array('customers.update', $customer->id))) !!}
  <!-- use this form if creating a new customer -->
  @elseif ($type == 'create')
  {!! Form::open(array('method' => 'POST','action' => 'CustomerController@store')) !!}
  @endif
  <!-- Errors if any-->
  @if (count($errors) > 0)
    @foreach ($errors->all() as $error)
    <script>Materialize.toast('{{ $error }}', 4000)</script>
    @endforeach
  @endif
  <!-- Start general details-->
  <p>Contact Information</p>
  <hr />
  <div class="row">
    <!-- Customer name-->
    <div class="input-field col s6">
      <i class="material-icons prefix">account_circle</i>
      <!-- {!! Form::text('name', $customer->name, array())!!} -->
      <input id="name" name="name" type="text" class="validate" value="{{ $customer->name or ''}}">
      <label for="name">Name</label>
    </div>
    <!-- Customer Mobile Phone-->
    <div class="input-field col s6">
      <i class="material-icons prefix">phone</i>
      <input name="phoneMob" id="phoneMob" type="text" class="validate" value="{{$customer->phoneMob or ''}}">
      <label for="phoneMob">Mobile Phone</label>
    </div>
  </div>
  <div class="row">
    <!-- Customer Address-->
    <div class="input-field col s12">
      <input name="address" id="address" type="text" class="validate" value="{{$customer->address or ''}}">
      <label for="address">Number &amp; Street</label>
    </div>
  </div>
  <p>Credit Card Details</p>
  <hr />
  <div class="row">
    <div class="input-field col s6">
      <input name="cardHolder" id="cardHolder" type="text" class="validate" value="{{$customer->cardHolder or ''}}">
      <label for="cardHolder">Card Holder's Name</label>
    </div>
    <div class="input-field col s6">
      <input name="cardNo" id="cardNo" type="text" class="validate" value="{{$customer->cardNo or ''}}">
      <label for="cardNo">Card Number</label>
    </div>
  </div>
  <div class="row">
    <!-- Card Month -->
    <div class="input-field col s4">
      <select id="monthPicker" name="month">
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
    <!-- Code to select Month in picker take php var and puts in js -->
    <script type="text/javascript">
    <?php
      if (isset($cardMonth)){
        $month = $cardMonth;
        echo "var month = '{$month}';";
      }

    ?>
    $("select option[value='"+ month +"']").attr("selected", "selected");
    </script>
    <!-- Card Year -->
    <div class="input-field col s4">
      <select id="yearPicker" name="year">
        <option value="2015">2015</option>
        <option value="2016">2016</option>
        <option value="2017">2017</option>
        <option value="2018">2018</option>
        <option value="2019">2019</option>
        <option value="2020">2020</option>
      </select>
      <label>Expiry Year</label>
    </div>
    <!-- Code to select Year in picker take php var and puts in js -->
    <script type="text/javascript">
    <?php
      if (isset($cardYear)){
        $year = $cardYear;
        echo "var month = '{$year}';";
      }
    ?>
    $("select option[value='"+ month +"']").attr("selected", "selected");
    </script>
    <div class="input-field col s4">
      <input name="cardCcv" id="cardCcv" type="text" class="validate" value="{{$customer->cardCcv or ''}}">
      <label for="cardCcv">CCV</label>
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
