@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('bootstrap-3.1.1/css/bootstrap.min.css') }}">

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
     
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>


<script>
    $('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input').val(recipient)
})
</script>
 <style>
body { background-color:#e6eeee;}</style>
        </head>
<body>
 
    <div class="login-clean">
           <form action="{{ route('employees.check') }}" method="post">
        
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-navigate" style="color:#ff0066"></i></div>
            
        
  
           @csrf
              <div class="form-group">
                 <label>Email</label>
                 <input type="text" class="form-control" name="email" placeholder="Enter email address" value="{{ old('email') }}">
                 <span class="text-danger">@error('email'){{ $message }} @enderror</span>
              </div>
              <div class="form-group">
                 <label>Password</label><button type="button" style="color:#ff0066;"  onclick="myFunction()" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-eye-open" ></span>  
        </button>
                 <input type="password"  id="myInput" class="form-control" name="password" placeholder="Enter password">
                 <span class="text-danger">@error('password'){{ $message }} @enderror</span>
               
              </div>   
                <button type="submit" class="btn btn-block btn-primary">Sign In</button>           
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
<i class='fas fa-users-cog' style='font-size:25px'></i> </button> 

              <br>
              <a href="http://localhost:8000/auth/register">I don't have an account, create new</a>
   
           </form>
      </div>
   </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>


       
    <div class="login-clean">
            <h2 class="sr-only">Login Form</h2>
            

     <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">login admin</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body"><div class="illustration"><i class="icon ion-ios-navigate" style="color:#ff0066"></i></div>
          
        <form    action ="{{ route('employees.admin') }}" method = "post">
          @csrf
        @include('sweetalert::alert')

          <div class="form-group">
            
            <label for="recipient-name" class="col-form-label">login:</label>
            <input type="text"    class="form-control" id="recipient-name"  name = "email" placeholder = "email = a.achcharf123@gmail.com" 
               required autofocus>
               <span class="text-danger">@error('email'){{ $message }} @enderror</span>
          </div>
          <div class="form-group">
            <label for="recipient-name"   class="col-form-label">mot de passe :</label>
            <input   class="form-control" type="password"   name = "password" placeholder = "password = ayoub" required>
            <span class="text-danger">@error('password'){{ $message }} @enderror</span></div>
          <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
        <button class = "btn btn-lg btn-primary btn-block"  
        type="submit"  name = "login"   >Login</button>
      </div>
        </form>
      </div>
      
    </div>
  </div>
</div>  
</body>
</html>

@endsection


