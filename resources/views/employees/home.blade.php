@extends('layouts.app') 
@section('content') 


<html>

<style>
body {
  
  background-image: url('4-0_careers_1600.jpg');
  background-color:#f8fcfd;
  font-family: Arial;
  font-size: 17px;
} 
 
* {
  box-sizing: border-box;
}
 
.container {
  position: relative;
  max-width: 800px;
  margin: 0 auto;
}

.container img {vertical-align: middle;}

.container .content { 
  position: fixed;
   text-align: right; 
   bottom: 5px; 
   
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.2); /* Black background with 0.5 opacity */
  color: #f1f1f1; 
  padding: 20px;
}
 
</style>
</head>
<body> 
 
  
 
       <div class="content">  
  
        <a class="button"  href="{{route('employees.dashboard')}}" >  Commencer </a>
     
      <h1>REJOIGNEZ-NOUS !</h1>
          
    
  </div>
   
    </div>
</body>

</html>
 
@endsection

