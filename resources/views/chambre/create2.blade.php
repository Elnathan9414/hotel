
@extends('adminlte::page')




@section('content')
<div class="col-md-12">
    <div class="card card-purple">
    <div class="card-header">
    <h3 class="card-title">Ajouter une chambre</h3>
    <div class="card-tools">
    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
    <i class="fas fa-minus"></i>
    </button>
    </div>
    </div>

    <form method="POST" action="{{route('client.store')}}" enctype="multipart/form-data">
        @csrf
    <div class="card-body" style="display: block;">
    <div class="form-group">
    <label for="inputEstimatedBudget">Numéro</label>
    <input type="number" id="inputEstimatedBudget" class="form-control" name="nbrelits">
    </div>

    <div class="form-group">
        <label for="inputEstimatedBudget">Nombre de lits</label>
        <input type="number" id="inputEstimatedBudget" class="form-control" name="numChambre">
        </div>
    <div class="form-group">
        <label for="inputEstimatedBudget">Standing</label>
        <input type="text" id="inputEstimatedBudget" class="form-control"  name="prenomClient">
        </div>
       
        
        <div class="form-group">
            <label for="inputEstimatedBudget">Contact</label>
            <input type="text" id="inputEstimatedBudget" class="form-control" name="contactClient">
            </div>
    <div class="form-group">
    <label for="inputSpentBudget">Adresse email</label>
    <input type="email" id="inputSpentBudget" class="form-control" name="emailClient">
    </div>
    
    </div>
    
    </div>
    <div class="row">
        <div class="col-12">
            <button type="reset" class="btn btn-danger">Annuler</button>
        <input type="submit" value="Ajouter un client" class="btn btn-success float-right">
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