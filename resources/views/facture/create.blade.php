
@extends('adminlte::page')




@section('content')
<div class="col-md-12">
    <div class="card card-success">
    <div class="card-header">
    <h3 class="card-title">Nouvelle facture</h3>
    <div class="card-tools">
    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
    <i class="fas fa-minus"></i>
    </button>
    </div>
    </div>
    <div class="card-body" style="display: block;">
    <div class="form-group">
            <label for="inputEstimatedBudget">Entreprise</label>
            <input type="text" id="inputEstimatedBudget" class="form-control">
    </div>
    <div class="form-group">
    <label for="inputEstimatedBudget">reference</label>
    <input type="text" id="inputEstimatedBudget" class="form-control">
    </div>
    <div class="form-group">
        <label for="inputEstimatedBudget">Numero de la facture</label>
        <input type="number" id="inputEstimatedBudget" class="form-control">
    </div>
    <div class="form-group">
        <label for="inputEstimatedBudget">Nom du client</label>
        <input type="text" id="inputEstimatedBudget" class="form-control">
    </div>
    <div class="form-group">
        <label for="inputEstimatedBudget">Service souscrit</label>
        <input type="text" id="inputEstimatedBudget" class="form-control">
    </div>
    <div class="form-group">
        <label for="inputEstimatedBudget">Montant</label>
        <input type="text" id="inputEstimatedBudget" class="form-control">
    </div>
    
    <div class="row">
        <div class="col-12">
        <a href="#" class="btn btn-info">Annuler</a>
        <input type="submit" value="Ajouter" class="btn btn-dark float-right">
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