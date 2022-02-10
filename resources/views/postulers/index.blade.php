@extends('layouts.master')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2><span class="nav-icon"><i class="fas fa-chart-bar"></i> Chart</span>
                            </h2>
            </div>
            
        </div>
    </div>
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
 
    <table >
    <tr><td>
    <figure class="highcharts-figure">
  <div id="container"></div>
   
</figure></td><td>
<canvas id="doughnut-chart" width="450" height="450"></canvas>
</td></tr></table>
<br><br>
           <input type="text" value="{{$data}}"   id="emp" hidden >
           <input type="text" value="{{$data1}}"   id="emp" hidden >
    <table class="table table-bordered table-responsive-lg">
        <tr> 
            <th>offreemploi_id</th>
            <th>employee_nom</th>
            <th>CV</th>
            <th>date</th>
            <th>Actions</th>
        </tr>
        @foreach ($postulers as $postuler)
            <tr>
                <input type="text" hidden value="{{$postuler->offreemploi_id}}">
                <td>{{$postuler->offreemploi->titre}}</td>
                <td>{{$postuler->employee->nom}}</td>
                <td><a href="{{route('employees.download',$postuler->employee->cv)}}" ><button  class="button"><i class="fa fa-arrow-circle-down"></i></button>
        </a> </td>
                <td>{{$postuler['date']}}</td> 
                 <td>
                    <form action="{{ route('postulers.destroy',$postuler->id) }}" method="POST">

                      

                        @csrf
                        @method('DELETE')

                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                            <i class="fas fa-trash fa-lg text-danger"></i>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    

    <script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<style>

.highcharts-figure,
.highcharts-data-table table {
  min-width: 500px;
  max-width: 700px;
  margin: 1em auto;
} 

.highcharts-data-table table {
  font-family: Verdana, sans-serif;
  border-collapse: collapse;
  border: 1px solid #ebebeb;
  margin: 10px auto;
  text-align: center;
  width: 100%;
  max-width: 500px;
}
 

.highcharts-data-table th {
  font-weight: 600;
  padding: 0.5em;
}
 
 
.highcharts-data-table tr:nth-child(even) {
  background: #f8f8f8;
}

.highcharts-data-table tr:hover {
  background: #f1f7ff;
}
</style>
 
<script type="text/javascript">
     
    
var data = {!! json_encode($data) !!};
var data1 = {!! json_encode($data1) !!};
  //var ok = Document.getElementById("emp").value;

    Highcharts.chart('container', {
  chart: {
    type: 'bar'
    
  },
  title: {
    text: 'Historique des postules'
  },
  
  xAxis: {
    categories: ['Offreemploi','Employee'],
    title: {
      text: null
    }
  },
  yAxis: {
    min: 0,
    title: {
      text: 'nombre des postulants ()',
      align: 'high'
    },
    labels: {
      overflow: 'justify'
    }
  },
  tooltip: {
    valueSuffix: ' '
  },
  plotOptions: {
    bar: {
      dataLabels: {
        enabled: true
      }
    }
  },
  legend: {
    layout: 'vertical',
    align: 'lefte',
    verticalAlign: 'top',
    x: -40,
    y: 80,
    floating: true,
    borderWidth: 1,
    backgroundColor:
      Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
    shadow: true
  },
  credits: {
    enabled: false
  }, 
     
  series: [{
    name: 'EMPLOYEE', 
     color:'#ff0066',
     
    data: [data]
  }, {
    name: 'Offreemploi', 
     color: '#0c0c3e',
    data: [data1]
  },    {
    
  }]
});




new Chart(document.getElementById("doughnut-chart"), {
    type: 'doughnut',
    data: {
      labels: ["EMPLOYEE","OFFRE"], 
       
      datasets: [
        {
          label: 'nombre des postulants ()',
          backgroundColor: ["#ff0066"],
          data: [data] 
        },
        {
          label: 'nombre des offres ()',
          backgroundColor: ["#0c0c3e"],
          data: [data1]
        }
      ]
    },
    options: {
      title: {
        display: true,
        text: 'nombre des postulants ()',
      }
    }
});
</script>
    {!! $postulers->links() !!}

@endsection