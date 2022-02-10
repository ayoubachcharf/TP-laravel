@extends('layouts.app')

@section('content')  <center>
                <h2>Envoyer votre demande</h2>
         
    <br> <br> <br>
        @include('sweetalert::alert')
     
    <form action="{{ route('postulers.store') }}" method="POST" >
    @csrf
        
             <div class="card">
                    <input type="hidden" value="{{ $id_emp}}"  name="employee_id"    >
                    
         <h4> titre de l'offre:  {{ $nom_offre}}</h4> 
                     
                     <input type="hidden" value="{{ $id_offre}}"   name="offreemploi_id"    >
                     
                 
                                        
                         <?php 

                        $month = date('m');
                        $day = date('d');
                        $year = date('Y');

                        $today = $year . '-' . $month . '-' . $day;
                        ?>
                     <input type="hidden"   value = "<?php echo $today; ?>"   name="date"  >
                   

                 
             
                <button type="submit"  class="button">Postuler a l'offre  <i class="fa fa-paper-plane"></i></button>
       
          
         
</div>  

    </form> </center>
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