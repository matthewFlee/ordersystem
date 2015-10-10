@extends('layouts.components')
<!DOCTYPE html>
<html>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <head>
        <!-- Materialize CSS and JS-->
        <!--Import Google Icon Font-->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
        <!-- Icons -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Compiled and minified JavaScript + Jquery-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <!-- End materialize -->
        <script text="text/javascript"src="{{asset('js/site.js')}}"></script>
        <title>@yield('title') - Order System</title>
    </head>
    <body>
        <div class='container'>
        <!--Nav bar -->
            <nav>
                <div class="nav-wrapper">
                <a href="#" class="brand-logo">Order System</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="/">Home</a></li>
                    <li><a href="/customers">Customers</a></li>
                    <li><a href="/orders">Orders</a></li>
                    <li><a href="/menu">Menu</a></li>
                    <li><a href="/admin">Admin</a></li>
                </ul>
                </div>
            </nav>
        <!-- Main content -->

            <div class='row'>
                <div class="col s9">
                    @section('main')
                        This is where the main content will go
                    @show
                </div>
                <div class="col s3 hide-on-med-and-down">
                    @section('sidebar')
                    <h1 class="center-align">Orders</h1>
                    <div style="height: 500px; overflow:auto;">
                        @foreach ($sOrders as $sOrder)
                        <div class="row">
                            <div class="col s12">
                                <div class="card blue-grey z-depth-2">
                                <div class="card-content white-text">
                                    <span class="card-title">{{$sOrder->name}}</span>
                                    <div class="">Time: {{date('m-d h:i a', strtotime($sOrder->created_at))}}</div>
                                    <div class="">Status: {{ucfirst($sOrder->status)}}</div>
                                    <div class="">Type: {{ucfirst($sOrder->type)}}</div>
                                </div>
                                <div class="card-action">
                                  <a href="/orders/{{$sOrder->id}}">View Order</a>
                                </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="row">
                      <div class="col s12 m12 l12">
                        <a href="/orders/all"  >
                        <div class="card">
                          <div class="card-content  green white-text">
                            <h4 class="center-align">View all orders</h4>
                          </div>
                        </div>
                        </a>
                      </div>
                    </div>
                    @show
                </div>
            </div>
        </div>
        @section('action-buttons')
        <!-- Fixed Action Button -->
        <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
            <a class="btn-floating btn-large red">
              <i class="large material-icons">add</i>
            </a>
            <ul>
                <li><a class="btn-floating red" href="/menu/create"><i class="small material-icons">insert_chart</i></a></li>
                <li><a class="btn-floating yellow darken-1" href="/customers/create"><i class="material-icons">perm_identity</i></a></li>
                <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
                <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
            </ul>
        </div>
        <!-- End fixed Action Button -->
        @show
    </body>
</html>
