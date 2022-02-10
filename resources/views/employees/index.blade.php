@extends('layouts.master')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Employee </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('employees.create') }}" title="Create a employee"> <i class="fas fa-plus-circle"></i>
                    </a>
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

    <table class="table table-bordered table-responsive-lg">
        <tr> 
            <th>nom</th>
            <th>tel</th>
            <th>email</th>
            <th>cv</th>
            <th>Actions</th>
        </tr>
        @foreach ($employees as $employee)
            <tr>
                <td>{{$employee['nom']}}</td>
                <td>{{$employee['tel']}}</td>
                <td>{{$employee['email']}}</td> 
                <td><a href="{{route('employees.download',$employee->cv)}}" ><button class="button"><i class="fa fa-arrow-circle-down"></i></button>
        </a></td>
                <td>
                    <form action="{{ route('employees.destroy',$employee->id) }}" method="POST">

                        <a href="{{ route('employees.show',$employee->id) }}" title="show">
                            <i class="fas fa-eye   fa-lg"></i>
                        </a>

                        <a href="{{ route('employees.edit',$employee->id) }}">
                            <i class="fas fa-edit  fa-lg"></i>
                        </a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                            <i class="fas fa-trash fa-lg "></i>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $employees->links() !!}

@endsection
