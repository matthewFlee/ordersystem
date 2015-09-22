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

    <!-- System Statistics -->
    <div id="stats" class="col s12">
      <!--card stats start-->
      <div id="system-stats">
        <div class="row">
          <div class="col s12 m6 l3">
            <div class="card">
              <div class="card-content  green white-text">
                <p class="card-stats-title"><i class="mdi-social-group-add"></i> Orders Today</p>
                <h4 class="card-stats-number">566</h4>
                <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> 15% <span class="green-text text-lighten-5">from yesterday</span>
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
                <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> 80% <span class="blue-grey-text text-lighten-5">from yesterday</span>
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
                <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> 70% <span class="purple-text text-lighten-5">last month</span>
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
                <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-down"></i> 3% <span class="deep-purple-text text-lighten-5">from last month</span>
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
        Have list of customers with pagenation. Possibly Load on tab hit(save bandwidth)
    </div>

    <!-- Menu Editor-->
    <div id="menuedit" class="col s12">
        <table class="stripped">
            <thead>
                <tr>
                    <th data-field="id">Item ID</th>
                    <th data-field="name">Name</th>
                    <th data-field="cost">Cost</th>
                    <th data-field="sellPrice">Sell Price</th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 0; $i < 10; $i ++)
                <tr>
                    <td>{{ $i+1 }}</td>
                    <td>Spaghetti</td>
                    <td>$5.50</td>
                    <td>$14.50</td>
                </tr>
                @endfor
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
    <div id="employeemgnt" class="col s12">
        List users. Have actions like reset password. Add new users etc
    </div>
  </div>

@endsection
