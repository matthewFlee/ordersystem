@extends('layouts.blank')

@section('main')
<div class="row">
    <div class="col s12">
        <ul class="tabs">
            <li class="tab col s3"><a class="active" href="#stats">Statistics</a></li>
            <li class="tab col s3"><a href="#custmgnt">Customer Management</a></li>
            <li class="tab col s3"><a href="#menuedit">Menu Editor</a></li>
            <li class="tab col s3"><a href="#employeemgnt">Employee Manager</a></li>
        </ul>
    </div>
    <!-- System Statistics tab-->
    <div id="stats" class="col s12">
      <!--card stats start-->
      <div id="system-stats">
        <div class="row">
          <div class="col s12 m6 l3">
            <div class="card">
              <div class="card-content  green white-text">
                <p class="card-stats-title"><i class="mdi-social-group-add"></i> Orders Today</p>
                <h4 class="card-stats-number">566 </h4>
                <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> 15%
                  <span class="green-text text-lighten-5">from yesterday</span>
                </p>
              </div>
              <div class="card-action  green darken-2">
                <div id="clients-bar"></div>
              </div>
            </div>
          </div>
          <div class="col s12 m6 l3">
            <div class="card">
              <div class="card-content blue-grey white-text">
                <p class="card-stats-title"><i class="mdi-action-trending-up"></i> Today's Sales</p>
                <h4 class="card-stats-number">$806.52</h4>
                <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> 80%
                  <span class="blue-grey-text text-lighten-5">from yesterday</span>
                </p>
              </div>
              <div class="card-action blue-grey darken-2">
                <div id="profit-tristate"></div>
              </div>
            </div>
          </div>
          <div class="col s12 m6 l3">
            <div class="card">
              <div class="card-content purple white-text">
                <p class="card-stats-title"><i class="mdi-editor-attach-money"></i>Monthly Sales</p>
                <h4 class="card-stats-number">$8990.63</h4>
                <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> 70%
                  <span class="purple-text text-lighten-5">last month</span>
                </p>
              </div>
              <div class="card-action purple darken-2">
                <div id="sales-compositebar"></div>
              </div>
            </div>
          </div>
          <div class="col s12 m6 l3">
            <div class="card">
              <div class="card-content pink lighten-2 white-text">
                <p class="card-stats-title"><i class="mdi-editor-insert-drive-file"></i> Customers</p>
                <h4 class="card-stats-number">1806</h4>
                <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-down"></i> 3%
                  <span class="deep-purple-text text-lighten-5">from last month</span>
                </p>
              </div>
              <div class="card-action  pink darken-2">
                <div id="invoice-line"></div>
              </div>
            </div>
          </div>

        </div>
      </div>
      <!--card stats end-->
    </div>
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
                <a href="#!" class="secondary-content"><i class="material-icons">reorder</i>17</a>
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

    <!-- Menu Editor tab-->
    <div id="menuedit" class="col s12">
        <table class="bordered">
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
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->item}}</td>
                    <td>${{$item->price}}</td>
                    <td><a href="#">Edit</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="center-align">
          <ul class="pagination">
            <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
            <li class="active"><a href="#!">1</a></li>
            <li class="waves-effect"><a href="#!">2</a></li>
            <li class="waves-effect"><a href="#!">3</a></li>
            <li class="waves-effect"><a href="#!">4</a></li>
            <li class="waves-effect"><a href="#!">5</a></li>
            <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
          </ul>
        </div>
    </div>
    <!-- Employee Management tab-->
    <div id="employeemgnt" class="col s12">
        List users. Have actions like reset password. Add new users etc
    </div>
  </div>

@endsection
