
@extends('adminlte::page')



@section('content')
<div class="col-md-12">
    <div class="card card-secondary">
    <div class="card-header">
    <h3 class="card-title">Modification de l entreprise</h3>
    <div class="card-tools">
    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
    <i class="fas fa-minus"></i>
    </button>
    </div>
    </div>
    <form method="POST" action="{{route('entreprise.update', $entreprise->id)}}" enctype="multipart/form-data">
        
        @csrf
        @method('PATCH')
    <div class="card-body" style="display: block;">
    <div class="form-group">
    <label for="inputEstimatedBudget">Nom l'entreprise</label>
    <input type="text" id="inputEstimatedBudget" class="form-control" name="nomEntreprise" value="{{ old('nomEntreprise', $entreprise->nomEntreprise) }}">
    </div>
    <div class="form-group">
        <label for="inputEstimatedBudget">Localisation</label>
        <input type="text" id="inputEstimatedBudget" class="form-control" name="localisationEntreprise" value="{{ old('localisationEntreprise', $entreprise->localisationEntreprise) }}">
        </div>
        <div class="form-group">
            <label for="inputEstimatedBudget">Contact</label>
            <input type="text" id="inputEstimatedBudget" class="form-control" name="contactEntreprise" value="{{ old('contactEntreprise', $entreprise->contactEntreprise) }}">
            </div>
    <div class="form-group">
    <label for="inputSpentBudget">Adresse email</label>
    <input type="email" id="inputSpentBudget" class="form-control" name="emailEntreprise" value="{{ old('emailEntreprise', $entreprise->emailEntreprise) }}">
    </div>
    
    </div>
    
    </div>
    <div class="row">
        <div class="col-12">
            <button type="reset" class="btn btn-danger">Annuler</button>
        <input type="submit" value="Enregistrer" class="btn btn-primary float-right">
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