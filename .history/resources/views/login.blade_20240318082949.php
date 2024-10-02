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

              @if(session()->has('Add'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
	            <strong>{{session()->get('Add')}}</strong>
	            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		            <span aria-hidden="true">&times;</span>
	              </button>
              </div>
              @endif

              @if(session()->has('Error'))
<div class="alert alert-damage alert-dismissible fade show" role="alert">
	<strong>{{session()->get('Error')}}</strong>
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
</div>
@endif


<form action="/login/store" method="post">
  @csrf
    <div class="form-group">
      <label for="email" class="sr-only">Email</label>
      <input type="email" name="email" id="email" class="form-control" placeholder="email@example.com">
    </div>
    <div class="form-group mb-4">
      <label for="password" class="sr-only">Password</label>
      <input type="password" name="password" id="password" class="form-control" placeholder="***********">
    </div>
    <button type="submit" class="btn btn-primary" name="login">Login</button>
  </form>
  <a href="#!" class="forgot-password-link">Forgot password?</a>
  <p class="login-card-footer-text">Don't have an account? <a href="/register" class="text-reset">Register here</a></p>
  
  @endsection
              
              
              
            