<html>

<head>
    <title>Offre emploie  @yield('title')</title>
    <meta charset="utf-8">
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('bootstrap-3.1.1/css/bootstrap.min.css') }}">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">


   <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
        integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
    </script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
 
    @section('sidebar')

    @include('sweetalert::alert')
    @show
    <style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #0c0c3e;
  
}

a.nav-link {
    display: flex;
      
    border-radius: .5rem; 
}
 .button  { 
     border-radius: 12px; 
     border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
 
li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
  

li a:hover:not(.active) {
  background-color: #ff0066;
}

.active {
  background: var(--main-color); 
}
</style>

<style>
    
    body { background-color:#e6eeee;}
      </style>
<style>
  

.login-clean form {
  
  width:90%;
  margin:0 auto;
  background-color:#ffffff;
  padding:40px;
  border-radius:4px;
  
  box-shadow:1px 1px 5px rgba(0,0,0,0.1);
}
.login-clean .illustration {
  text-align:center;
  padding:0 0 20px;
  font-size:100px; 
}

.login-clean form .form-control {
  background:#f7f9fc;
  border:none;
  border-bottom:1px solid #ff0066;
  border-radius:0;
  box-shadow:none;
  outline:none;
  color:inherit;
  text-indent:8px;
  height:42px;
}

.login-clean form .btn-primary {
  background:#ff0066;
  border:none;
  border-radius:4px;
  padding:11px;
  box-shadow:none;
  margin-top:26px;
  text-shadow:none;
  outline:none !important;
}
 

.login-clean form .forgot {
  display:block;
  text-align:center;
  font-size:12px;
  color:#ff0066;
  opacity:0.9;
  text-decoration:none;
}

.login-clean form .forgot:hover, .login-clean form .forgot:active {
  opacity:1;
  text-decoration:none;
}


</style>
</head>
<body>

<ul>
<li> <a href="" style="float:right" class="logo">
                    <spna class="logo-icon">
                        <i class="fas fa-tachometer-alt"></i>
                    </spna>
                    <span class="logo-text">Offre emploie  </span>
                </a></li> 
  <li><a class="nav-link"  class="active"  href="http://localhost:8000/" ><i class="fas fa-home"></i> Home</a></li>
  
  <li style="float:right"><a  class="nav-link" href="{{route('auth.logout')}}"><i class="fas fa-sign-out-alt"></i> Logout</a></li>

</ul>

    <div class="container">
        @yield('content')
    </div>
    <div class="text-center footer">
 

    </div>
</body> 

<style>
      body {
        margin: 0;
      }
      .wrapper {
        display: flex;
        height: 20vh;
        flex-direction: row;
        justify-content: center;
        align-items: center;
      }
      .button {
        border: 1px transparent;
        -webkit-border-radius: 40px;
        border-radius: 40px;
        color: #eeeeee;
        cursor: pointer;
        display: inline-block;
        font-family: Arial;
        font-size: 20px;
        padding: 8px 30px;
        text-align: center;
        text-decoration: none;
        margin-left: 20px;
        -webkit-animation: glowing 1300ms infinite;
        -moz-animation: glowing 1300ms infinite;
        -o-animation: glowing 1300ms infinite;
        animation: glowing 1300ms infinite;
      }
      @-webkit-keyframes glowing {
        0% {
          background-color: #0091b2;
          -webkit-box-shadow: 0 0 3px #0091b2;
        }
        50% {
          background-color: #21c7ed;
          -webkit-box-shadow: 0 0 15px #21c7ed;
        }
        100% {
          background-color: #0091b2;
          -webkit-box-shadow: 0 0 3px #0091b2;
        }
      }
      @keyframes glowing {
        0% {
          background-color: #0091b2;
          box-shadow: 0 0 3px #0091b2;
        }
        50% {
          background-color: #21c7ed;
          box-shadow: 0 0 15px #21c7ed;
        }
        100% {
          background-color: #0091b2;
          box-shadow: 0 0 3px #0091b2;
        }
      }
      .svg-btn {
        display: block;
        width: 230px;
        height: 230px;
        margin-left: 10px;
      }
      svg {
        fill: blue;
        -webkit-animation: glowing-polygon 1300ms infinite;
        -moz-animation: glowing-polygon 1300ms infinite;
        -o-animation: glowing-polygon 1300ms infinite;
        animation: glowing-polygon 1300ms infinite;
      }
      @-webkit-keyframes glowing-polygon {
        0% {
          fill: #0091b2;
          -webkit-filter: drop-shadow( 0 0 3px #0091b2);
        }
        50% {
          fill: #21c7ed;
          -webkit-filter: drop-shadow( 0 0 15px #21c7ed);
        }
        100% {
          fill: #0091b2;
          -webkit-filter: drop-shadow( 0 0 3px #0091b2);
        }
      }
      @keyframes glowingPolygon {
        0% {
          fill: #0091b2;
          filter: drop-shadow( 0 0 3px #0091b2);
        }
        50% {
          fill: #21c7ed;
          filter: drop-shadow( 0 0 15px #21c7ed);
        }
        100% {
          fill: #0091b2;
          filter: drop-shadow( 0 0 3px #0091b2);
        }
      }
    </style>
  
 