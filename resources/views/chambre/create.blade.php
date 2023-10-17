
@extends('adminlte::page')




@section('content')
<div class="col-md-12" >


    
    <div class="card card-info">
    <div class="card-header">
    <h3 class="card-title">Ajout d'une chambre</h3>
    </div>
    
    
    <form class="form-horizontal">
    <div class="card-body">
    <div class="form-group row">
   
    <div class="input-group mb-3">
        <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-calculator"></i></span>
            </div>
            <input type="number" class="form-control" placeholder="Numero de la chambre">
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-bed"></i></span>
            </div>
            <input type="number" class="form-control" placeholder="Numero de la chambre">
    </div>
        <br>
     <div class="input-group mb-3">
        <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-numeric"></i></span>
        </div>
        <input type="email" class="form-control" placeholder="Email">
        </div>
        <br>
    </div>
     <div class="input-group mb-3">
        <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
        </div>
        <input type="email" class="form-control" placeholder="Email">
        </div>
    </div>
    </div>
    
    <div class="card-footer">
    <button type="submit" class="btn btn-info">Ajourer</button>
    <button type="submit" class="btn btn-danger float-right">Annuler</button>
    </div>
    
    </form>
    </div>
    
    </div>
@stop

