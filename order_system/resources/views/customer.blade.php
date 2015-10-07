@extends('layouts.master')
@include('layouts.components')
@section('title')
Customers
@endsection

@section('main')
<!-- Customer Management tab-->
<div id="custmgnt" class="col s12">
  <div class="row">
    <div class="col s12 m9 l10">
      <!-- Search bar -->
      <div class="row">
        <form class="col s12">
          <div class="row">
            <div class="input-field col s12">
              <input id="cSearchQuery" type="text">
              <label for="cSearchQuery">Search for a customer</label>
            </div>
          </div>
        </form>
      </div>
      <!--End Search Bar -->

      <div id="alpha-a" class="section scrollspy">
        <ul class="collection">
          <!-- item start -->
          @foreach ($customers as $customer)
          <li id='alpha-{{strtolower($customer->name[0])}}'class="collection-item avatar">
            <img src="" alt="" class="circle">
            <span class="title">{{ $customer->name }}</span>
            <p>
              {{ $customer->address}}
            </p>
            <p>
              {{ $customer->phoneMob}}
            </p>
            <p>
              <a href="{{ url('customers', [$customer->id])}}">View customer</a>
            </p>
            <a href="/customers/{{$customer->id}}/edit" class="secondary-content"><i class="material-icons">mode edit</i></a>
          </li>
          @endforeach
          <!-- End item -->
        </ul>
      </div>
      <div id="alpha-b" class="section scrollspy">
      </div>

      <div id="alpha-c" class="section scrollspy">
      </div>
    </div>
    <!-- Alphabet Side bar -->
    <div class="col hide-on-small-only m3 l2 ">
      <ul class="section table-of-contents pinned">
        <li><a href="#alpha-a">A</a></li>
        <li><a href="#alpha-b">B</a></li>
        <li><a href="#alpha-c">C</a></li>
        <li><a href="#alpha-c">D</a></li>
        <li><a href="#alpha-c">E</a></li>
        <li><a href="#alpha-c">F</a></li>
        <li><a href="#alpha-c">G</a></li>
        <li><a href="#alpha-c">H</a></li>
        <li><a href="#alpha-c">I</a></li>
        <li><a href="#alpha-c">J</a></li>
        <li><a href="#alpha-c">K</a></li>
        <li><a href="#alpha-c">L</a></li>
        <li><a href="#alpha-c">M</a></li>
        <li><a href="#alpha-c">N</a></li>
        <li><a href="#alpha-c">O</a></li>
        <li><a href="#alpha-c">P</a></li>
        <li><a href="#alpha-c">Q</a></li>
        <li><a href="#alpha-c">R</a></li>
        <li><a href="#alpha-c">S</a></li>
        <li><a href="#alpha-c">T</a></li>
        <li><a href="#alpha-c">U</a></li>
        <li><a href="#alpha-c">V</a></li>
        <li><a href="#alpha-c">W</a></li>
        <li><a href="#alpha-c">X</a></li>
        <li><a href="#alpha-c">Y</a></li>
        <li><a href="#alpha-c">Z</a></li>
      </ul>
    </div>
  </div>
  <!-- End side bar -->
</div>
@endsection
