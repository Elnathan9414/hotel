
@extends('adminlte::page')




@section('content')
<div class="col-md-12">
    <div class="card card-success">
    <div class="card-header">
    <h3 class="card-title">Modification d un service</h3>
    <div class="card-tools">
    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
    <i class="fas fa-minus"></i>
    </button>
    </div>
    </div>
    <div class="card-body" style="display: block;">
    <form method="POST" action="{{route('service.update',$service->id)}}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
    <div class="form-group">
    <label for="inputEstimatedBudget">Nom service</label>
    <input type="text" id="inputEstimatedBudget" class="form-control" name="nomService" value="{{ old('nomService', $service->nomService) }}">
    </div>
    <div class="form-group">
        <label for="inputEstimatedBudget">Description</label>
        <input type="text" id="inputEstimatedBudget" class="form-control" name="descriptionService" value="{{ old('descriptionService', $service->descriptionService) }}">
        </div>
        
    </div>
    
    </div>
    <div class="row">
        <div class="col-12">
        <a href="#" class="btn btn-secondary">Annuler</a>
        <input type="submit" value="Ajouter un service" class="btn btn-primary float-right">
        </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop