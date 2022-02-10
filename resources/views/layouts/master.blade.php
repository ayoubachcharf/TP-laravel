<html>

<head>
    <title>TP-Laravel - @yield('title')</title>
    <meta charset="utf-8"> 
    
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">
    <!-- Font Awesome JS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
        integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
    </script> 
  
    
<!-- ========font============= -->
 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
<style>
ul.ok {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #0c0c3e;
}
 
.active {
  background-color: #04AA6D;
}
</style>
</head> 
 

<body> 
   

@section('sidebar')
 

@include('sweetalert::alert')
@show
<ul class="ok">
  <li> <a href="" style="float:right" class="logo">
                    <spna class="logo-icon">
                        <i class="fas fa-tachometer-alt"></i>
                    </spna>
                    <span class="logo-text">TP-Laravel </span>
                </a></li> 
  
</ul>
<br><br>
    <div class="navigation">
        <nav class="nav">
            <div class="">
               
                <div class="toggle">
                    <i class="fas fa-arrow-left"></i>
                </div>
                <ul class="nav-list">
                    <li>
                        <a href="http://localhost:8000/postulers" class="nav-link active">
                            <span class="nav-icon"><i class="fas fa-home"></i></span>
                            <span class="nav-text">Accueil</span>
</a>
                    </li>

                    <li>
                        <a href="http://localhost:8000/employees" class="nav-link">
                            <span class="nav-icon"><i class="fa fa-users" style="font-size:25px"></i></span>
                            <span class="nav-text"> Employee</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://localhost:8000/offreemplois" class="nav-link">
                            <span class="nav-icon"><i class="material-icons">forum</i></span>
                            <span class="nav-text"> Offreemploi</span>
                        </a>
                    </li>
                    
                    <li>
                        <a href="#" class="nav-link">
                            <span class="nav-icon"><i class="fas fa-cog"></i></span>
                            <span class="nav-text">Settings</span>
                        </a>
                    </li>
                </ul>
            </div>

            <a href="{{route('auth.logout')}}" class="nav-link">
                <span class="nav-icon"><i class="fas fa-sign-out-alt"></i></span>
                <span class="nav-text">Logout</span>
            </a>
        </nav>
    </div>
    
<div class="container">
        @yield('content')
    </div>
<!-- script -->

    <script src="js/app.js"></script>
 
   
</body>
<style type = "text/css"> 

                    
/* import google font  */
 
 
/* basic reset */
 
input[type=text], select  {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}input[type=button], input[type=submit], input[type=reset] {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}
.fa-lg{
    background-color: '#0c0c3e';
}
.button  {background-color: #ff0066;
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
:root {
    --white: #fff;
    --primary: #0c0c3e;
    --main-color: #ff0066;
}

*,
*::after,
*::before {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

html {
    font-size: 62%;
}
 
body { 
  
   
    min-height: 100vh;
    font-size: 1.6rem;
    background-color: var(--white);
    color: var(--primary);
    font-family: "Poppins", sans-serif;
}

li {
    list-style: none;
}

a {
    text-decoration: none;
}

.navigation {
    position: fixed;
    width: 220px;
    top: 0;
    left: 0;
    height: 100vh;
    background: var(--primary);
    z-index: 100;
    padding: 1.5rem 0.5rem 2rem;
    transition: .5s;
}

nav.nav {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
     height: 100%; 
    overflow: hidden;
}

a.logo {
    display: flex;
    align-items: center;
    margin-bottom: 2rem;
    padding: 0.7rem .5rem .5rem .5rem;
    color: var(--white);
}

 span.logo-icon {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 1.5rem;
    font-size: 2rem;
}

span.logo-text {
    font-size: 1.8rem;
}

.nav .toggle {
    position: absolute;
    top: .5rem;
    right: -1.8rem;
    background-color: var(--main-color);
    width: 2.8rem;
    height: 2.8rem;
    line-height: 1.6rem;
    font-size: 1.6rem;
    color: var(--white);
    cursor: pointer;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
}

a.nav-link {
    display: flex;
    align-items: center;
    padding: .7rem .5rem .5rem .5rem;
    margin-bottom: 1rem;
    border-radius: .5rem;
    color: var(--white);
    transition: .5s ease-in-out;
}

span.nav-icon {
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 2rem;
    margin-right: 1.5rem;
}

span.nav-text {
    font-weight: 500;
}

a.nav-link:hover {
    background: var(--main-color);
}

a.nav-link.active {
    background: var(--main-color);
}

.navigation.active {
    width: 45px;
}
                         
</style>
<script>
    const navLinks = [...document.querySelectorAll(".nav-link")];
const toggle = document.querySelector(".toggle");
const navigation = document.querySelector(".navigation");


// item active js 

navLinks.forEach((link) => {
    link.addEventListener("click", () => {
        let i = 0;
        while (i < navLinks.length) {
            navLinks[i++].className = "nav-link"
        }
        link.classList.add("active");
    });
});

toggle.addEventListener("click", () => {
    navigation.classList.toggle("active");
    if (navigation.classList.contains("active")) {
        toggle.innerHTML = `<i class="fas fa-arrow-right"></i>`;
    } else {
        toggle.innerHTML = `<i class="fas fa-arrow-left"></i>`;

    }
})
               
</script>