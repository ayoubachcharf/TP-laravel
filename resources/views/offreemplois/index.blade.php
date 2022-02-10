@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Offreemploi</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('offreemplois.create') }}" title="Create a offreemploi"> <i class="fas fa-plus-circle"></i>
                    </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p></p>
        </div>
    @endif

    <table class="table table-bordered table-responsive-lg">
        <tr> 
            <th>titre</th>
            <th>description</th>
            <th>etat</th>
            <th>Actions</th>
        </tr>
        @foreach ($offreemplois as $offreemploi)
            <tr>
                <td>{{$offreemploi['titre']}}</td>
                <td>{{$offreemploi['description']}}</td>
                <td>{{$offreemploi['etat']}}</td> 
                 <td>
                    <form action="{{ route('offreemplois.destroy',$offreemploi->id) }}" method="POST">

                        <a href="{{ route('offreemplois.show',$offreemploi->id) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="{{ route('offreemplois.edit',$offreemploi->id) }}">
                            <i class="fas fa-edit  fa-lg"></i>
                        </a>

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

    {!! $offreemplois->links() !!}

@endsection
