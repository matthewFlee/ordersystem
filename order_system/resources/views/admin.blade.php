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
    <div id="stats" class="col s12">
        Statistics go here
    </div>
    <div id="custmgnt" class="col s12">
        Have list of customers with pagenation. Possibly Load on tab hit(save bandwidth)
    </div>
    <div id="menuedit" class="col s12">
        <p>List all menu items. Tabular form</p>

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
