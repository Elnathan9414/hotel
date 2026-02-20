@extends('adminlte::page')

@section('title', 'Détails de la chambre')

@section('content_header')
    <h1>Détails de la chambre</h1>
@stop

@section('content')

<div class="row">
    <div class="col-12">

        <div class="card">
            <div class="card-header bg-primary">
                <h3 class="card-title">Chambre #{{ $room->number }}</h3>
            </div>

            <div class="card-body">

                <div class="row mb-3">
                    <div class="col-sm-4 font-weight-bold">Numéro :</div>
                    <div class="col-sm-8">{{ $room->number }}</div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4 font-weight-bold">Type :</div>
                    <div class="col-sm-8">{{ $room->type }}</div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4 font-weight-bold">Capacité :</div>
                    <div class="col-sm-8">{{ $room->capacity }} personnes</div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4 font-weight-bold">Prix par nuit :</div>
                    <div class="col-sm-8">{{ number_format($room->price_per_night, 2) }} $</div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4 font-weight-bold">Hôtel :</div>
                    <div class="col-sm-8">{{ $room->hotel->name }}</div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4 font-weight-bold">Date d'ajout :</div>
                    <div class="col-sm-8">{{ $room->created_at->format('d/m/Y') }}</div>
                </div>

            </div>

            <div class="card-footer">

                <a href="{{ route('rooms.index') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i> Retour
                </a>

                <a href="{{ route('rooms.edit', $room) }}" class="btn btn-warning">
                    <i class="fas fa-edit"></i> Modifier
                </a>

                <form action="{{ route('rooms.destroy', $room) }}" method="POST" class="d-inline">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger" onclick="return confirm('Supprimer cette chambre ?')">
                        <i class="fas fa-trash"></i> Supprimer
                    </button>
                </form>

            </div>
        </div>

    </div>
</div>

@stop