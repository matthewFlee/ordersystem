@extends('layouts.blank')

@section('title', 'Login')


@section('main')
<div class="row">
    <div class="col s4 z-depth-4 card-panel offset-s4">
      <form class="login-form">
        <div class="row">
          <div class="input-field col s12 center">
            <img src="" alt="" class="circle responsive-img valign profile-image-login">
            <p class="center login-form-text">Login to continue</p>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input id="username" type="text">
            <label for="username" class="center-align">Username</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input id="password" type="password">
            <label for="password">Password</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12 m12 l12  login-text">
              <input type="checkbox" id="remember-me" />
              <label for="remember-me">Remember me</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <a href="{{route('home')}}" class="btn waves-effect waves-light col s12">Login</a>
          </div>
        </div>
        <div class="row">
        </div>

      </form>
    </div>
</div>
@endsection
