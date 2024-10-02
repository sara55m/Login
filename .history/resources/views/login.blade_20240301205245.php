@extends('layout')
@section('title')
Login Form
@stop
@section('content')
              <p class="login-card-description">Sign into your account</p>
              @if($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error )
                  <li>{{$error}}</li>
                  @endforeach
                </ul>
              </div>
              @endif
              
              <form action="/login/store" method="post">
                @csrf
                  <div class="form-group">
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email address">
                  </div>
                  <div class="form-group mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="***********">
                  </div>
                  <button type="submit" class="btn btn-primary" name="login">Login</button>
                </form>
                <a href="#!" class="forgot-password-link">Forgot password?</a>
                <p class="login-card-footer-text">Don't have an account? <a href="/register" class="text-reset">Register here</a></p>
                <nav class="login-card-footer-nav">
                  <a href="#!">Terms of use.</a>
                  <a href="#!">Privacy policy</a>
                </nav>
                @endsection
            