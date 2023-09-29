
@extends('adminlte::page')

@section('content')
<div class="card">
    
    <div class="card-header">
    <h3 class="card-title">Entreprise</h3>
    <div class="card-tools">
    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
    <i class="fas fa-minus"></i>
    </button>
    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
    <i class="fas fa-times"></i>
    </button>
    </div>
    </div>
    <div class="card-body p-0">
        <div class="d-flex justify-content-end">
            <a href="{{route('entreprise.create')}}" class="btn btn-secondary btn-lg"><span class="fa fa-plus-circle"></span> Ajouter</a>
         </div>
    <table class="table table-striped projects">
    <thead>
    <tr>
    <th style="width: 1%">
    id
    </th>
    <th style="width: 20%">
    Nom de l'entreprise
    </th>
    <th style="width: 30%">
    Localisation
    </th>
    <th>
    Email
    </th>
    <th style="width: 8%" class="text-center">
    Contact
    </th>
    <th style="width: 15%">
        Actions
    </th>
    </tr>
    </thead>
    <tbody>
        
        <tr>
            @foreach ($entreprise as $ent )
            <td>{{$ent->id}}</td>
            <td>{{$ent->nomEntreprise}}</td>
            <td>{{$ent->localisationEntreprise}}</td>
            <td>{{$ent->contactEntreprise}}</td>
            <td>{{$ent->emailEntreprise}}</td>
            <td>
          
              <a href="{{ route('entreprise.show', $ent->id) }}" class="btn btn-success"><span class="fas fa-eye"></span> </a>
            <a href="{{route('entreprise.edit', $ent->id)}}" class="btn btn-warning"><span class="fas fa-edit"></span> </a>
            </td>
            <td>
            <form action="{{ route('entreprise.destroy', $ent->id) }}" method="post">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger"><span class="fa fa-times-circle"></span>  </button>
        
          </form>
          </td>
      </div>
      </tr>
      @endforeach
    </tbody>
    
    
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop