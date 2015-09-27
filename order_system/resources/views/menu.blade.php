@extends('layouts.master')
@section('title')
Menu
@endsection
@section('main')
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
@endsection

@section('sidebar')
@parent
@endsection
