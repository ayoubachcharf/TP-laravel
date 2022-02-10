@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>  </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('offreemplois.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>
    <div class="row"> 
       
 <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>titre: {{ $offreemploi->titre }}</strong>

            </div>
        </div> 
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>description: {{ $offreemploi->description }}</strong>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>etat: {{ $offreemploi->etat }}</strong>

            </div>
        </div>
        
    </div>
@endsection