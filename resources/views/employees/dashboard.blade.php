@extends('layouts.app')
@section('content') 
 
                <h1 >Liste des offres</h1>
            
    @include('sweetalert::alert')
       
        @foreach ($offreemploi as $offreemploi)
       
    <div class="card">
        <li></li>
         
      <h3 >     {{$offreemploi['titre']}} </h3>
               <p> {{$offreemploi['description']}} </p>
                
                 <br> <i>{{$offreemploi['etat']}}</i> 
                    
                        
                        <a class="button"  href="{{ route('postulers.create',['id_emp'=>$LoggedUserInfo->id,'nom_emp'=>$LoggedUserInfo->nom,'id_offre'=>$offreemploi->id,'nom_offre'=>$offreemploi->titre]  ) }}">
                        <input name="id" hidden value="{{ $offreemploi->id }}" hidden>
                        <input name="id" hidden value="{{ $LoggedUserInfo->id }}" hidden>
                         <span  class="glyphicon glyphicon-log-in" style="float:right"  type="submit" > Consulter!</span >
                        </a>
 
  
                        @csrf
                       
                 <br> 
                              </div>    @endforeach   
                              <br> 
<style>
   
* { 
box-sizing: border-box;
}
 .card {
  display: inline-block;
  box-shadow: 5px 5px 5px 5px rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;  
   

}
body { background-color:#e6eeee;}
  
 
</style>
@endsection