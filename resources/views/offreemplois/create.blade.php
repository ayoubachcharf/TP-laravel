@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Ajouter un offreemploi</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('offreemplois.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form action="{{ route('offreemplois.store') }}" method="POST" >
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>titre:</strong>
                    <input type="text" name="titre" class="form-control" placeholder="titre">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>description:</strong>
                    <textarea type="text" name="description" class="form-control" placeholder="description"></textarea>
               
                </div>
            </div> 
                <select   name="etat" class="col-xs-12 col-sm-12 col-md-12">
                      <option selected>etat...</option>
                          <option value="expiré">expiré</option>
                          <option value="no-expiré">no-expiré</option>
     
                 </select>
            

            
            
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection