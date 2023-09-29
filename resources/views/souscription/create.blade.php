
@extends('adminlte::page')




@section('content')
<div class="col-md-12">
    <div class="card card-primary">
    <div class="card-header">
        <form method="POST" action="{{route('souscription.store')}}" enctype="multipart/form-data">
            @csrf
    <h3 class="card-title">Nouvelle souscription</h3>
    <div class="card-tools">
    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
    <i class="fas fa-minus"></i>
    </button>
    </div>
    </div>
   
    
        <div class="form-group">
            <div class="col-sm-12">
    
              <div class="form-group">
              <label>Service Souscrit</label>
              <select class="form-control" id="serviceSouscrit" name="serviceSouscrit">
                <option value=""> </option>
                @foreach ($souscription as $sou )
                    <option aria-placeholder="serviceSouscrit " value="{{$sou->id}}">{{$sou->service->nomService}}</option>
                @endforeach
              </select>
              </div>
              </div>
              <div class="form-group">
                <div class="col-sm-12">
        
                  <div class="form-group">
                  <label>Client</label>
                  <select class="form-control" id="clientsouscrit" name="clientsouscrit">
                    <option value=""> </option>
                    @foreach ($souscription as $sou )
                        <option aria-placeholder="clientsouscrit " value="{{$sou->id}}">{{$sou->client->nomClient}} </option>
                    @endforeach
                  </select>
                  </div>
                  </div>
    <div class="form-group">
        <label for="inputEstimatedBudget">Date de souscription</label>
        <input type="date" id="inputEstimatedBudget" class="form-control" name="datedebut">
        </div>
        
    </div>
    <div class="form-group">
        <label for="inputEstimatedBudget">Fin de validité</label>
        <input type="date" id="inputEstimatedBudget" class="form-control" name="datefin">
        </div>
        
    </div>
    </div>
    <div class="row">
        <div class="col-12">
            <button type="reset" class="btn btn-danger">Annuler</button>
        <input type="submit" value="Ajouter un service" class="btn btn-info float-right">
        </div>
        </div>
    </div>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop