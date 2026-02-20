@extends('adminlte::page')

@section('title', 'Détails du client')

@section('content_header')
    <h1>Détails du client</h1>
@stop

@section('content')

<div class="row col-md-12">
    <div class="col-md-12">

        <div class="card">
            <div class="card-header bg-primary">
                <h3 class="card-title">Informations du client</h3>
            </div>

            <div class="card-body">

                <div class="row mb-3">
                    <div class="col-sm-4 font-weight-bold">Nom complet :</div>
                    <div class="col-sm-8">{{ $client->full_name }}</div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4 font-weight-bold">Email :</div>
                    <div class="col-sm-8">{{ $client->email ?? '—' }}</div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4 font-weight-bold">Téléphone :</div>
                    <div class="col-sm-8">{{ $client->phone ?? '—' }}</div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4 font-weight-bold">Notes :</div>
                    <div class="col-sm-8">{{ $client->notes ?? 'Aucune note' }}</div>
                </div>

            </div>

            <div class="card-footer">

                <a href="{{ route('client.index') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i> Retour
                </a>

                <a href="{{ route('client.edit', $client) }}" class="btn btn-warning">
                    <i class="fas fa-edit"></i> Modifier
                </a>

                <form action="{{ route('client.destroy', $client) }}" method="POST" class="d-inline">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger" onclick="return confirm('Supprimer ce client ?')">
                        <i class="fas fa-trash"></i> Supprimer
                    </button>
                </form>

            </div>
        </div>

    </div>
</div>

@stop