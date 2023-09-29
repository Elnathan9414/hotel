
@extends('adminlte::page')




@section('content')
<div class="card">
    
    <div class="card-header">
    <h3 class="card-title">Souscriptions</h3>
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
            <a href="{{route('souscription.create')}}" class="btn btn-secondary btn-lg"><span class="fa fa-plus-circle"></span> Ajouter</a>
         </div>
    <table class="table table-striped projects">
    <thead>
    <tr>
    <th style="width: 1%">
    id
    </th>
    <th style="width: 20%">
    Client
    </th>
    <th style="width: 30%">
    Service
    </th>
    <th>
    Date de souscription
    </th>
    <th style="width: 15%" class="text-center">
    Date d expiration
    </th>
    <th style="width: 15%">
        Actions
    </th>
    </tr>
    </thead>
    <tbody>
        
        <tr>
            @foreach ($souscription as $sous )
            <td>{{$sous->id}}</td>
             <td>{{$sous->client->nomClient}}</td>
            <td>{{$sous->service->nomService}}</td>  
            <td>{{$sous->datedebut}}</td>
            <td>{{$sous->datefin}}</td>
            <td>
          
              <a href="{{ route('souscription.show', $sous->id) }}" class="btn btn-success"><span class="fas fa-eye"></span> </a>
            <a href="{{route('souscription.edit', $sous->id)}}" class="btn btn-warning"><span class="fas fa-edit"></span> </a>
            </td>
            <td>
            <form action="{{ route('souscription.destroy', $sous->id) }}" method="post">
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