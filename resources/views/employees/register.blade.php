@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('bootstrap-3.1.1/css/bootstrap.min.css') }}">
    
 <style>
body { background-color:#e6eeee;}</style>
</head>
<body>

<div class="login-clean">
     
<h4>Register | Custom employees</h4><hr>
           <form action="{{ route('employees.store') }}" method="post" enctype="multipart/form-data">
           @csrf
           <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-navigate" style="color:#ff0066"></i></div>
            
           @if(Session::get('success'))
             <div class="alert alert-success">
                {{ Session::get('success') }}
             </div>
           @endif

           @if(Session::get('fail'))
             <div class="alert alert-danger">
                {{ Session::get('fail') }}
             </div>
           @endif
 
           <div class="form-group">
                 <label>Name</label>
                 <input type="text" class="form-control" name="nom" placeholder="Enter full name" value="{{ old('name') }}">
                 <span class="text-danger">@error('nom'){{ $message }} @enderror</span>
              </div>
              <div class="form-group">
                 <label>Tél</label>
                 <input type="text" class="form-control" name="tel" placeholder="Enter tel" value="{{ old('tel') }}">
                 <span class="text-danger">@error('tel'){{ $message }} @enderror</span>
              </div>
              <div class="form-group">
                 <label>Email</label>
                 <input type="text" class="form-control" name="email" placeholder="Enter email address" value="{{ old('email') }}">
                 <span class="text-danger">@error('email'){{ $message }} @enderror</span>
              </div>
              <div class="form-group">
                 <label>Password</label>
                 <input type="password" class="form-control" name="password" placeholder="Enter password">
                 <span class="text-danger">@error('password'){{ $message }} @enderror</span>
              </div>
              <div class="form-group">
                 <label>CV</label>
                 <input type="file" class="form-control" name="cv" placeholder="Enter full cv" value="{{ old('cv') }}">
                 <span class="text-danger">@error('cv'){{ $message }} @enderror</span>
              </div>
              <button type="submit" class="btn btn-block btn-primary">Sign Up</button>
              <br>
              <a href="http://localhost:8000/auth/login">I already have an account, sign in</a>
           </form>
      </div>
   </div>
</div>
    
</body>
</html>

@endsection
