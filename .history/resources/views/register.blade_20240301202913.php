@extends('layout')
@section('title')
Registration Form
@stop
@section('content')
              <p class="login-card-description">Create Your Account</p>
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
              <form action="/register/store" method="post">
                @csrf
                <div class="form-group">
                    <label for="username" class="sr-only">Username</label>
                    <input type="text" name="username" id="username" class="form-control" placeholder="Username">
                    
                  </div>
                  <div class="form-group">
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email address">
                  </div>

                  <div class="form-group">
                    <label for="phone" class="sr-only">Phone</label>
                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone Number">
                  </div>
                  <div class="form-group mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="***********">
                  </div>
                  <button type="submit" class="btn btn-primary" name="register">Register</button>
                </form>
                
                
                  
                </nav>
                @endsection
            
