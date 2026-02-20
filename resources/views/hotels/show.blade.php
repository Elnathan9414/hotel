@extends('adminlte::page')

@section('title', 'Détails de l\'hôtel')

@section('content_header')
    <h1>Détails de l'hôtel</h1>
@stop

@section('content')

<div class="row">
    <div class="col-12">

        <div class="card">
            <div class="card-header bg-primary">
                <h3 class="card-title">{{ $hotel->name }}</h3>
            </div>

            <div class="card-body">

                <div class="row mb-3">
                    <div class="col-sm-4 font-weight-bold">Nom :</div>
                    <div class="col-sm-8">{{ $hotel->name }}</div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4 font-weight-bold">Adresse :</div>
                    <div class="col-sm-8">{{ $hotel->address ?? '—' }}</div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4 font-weight-bold">Ville :</div>
                    <div class="col-sm-8">{{ $hotel->city ?? '—' }}</div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4 font-weight-bold">Pays :</div>
                    <div class="col-sm-8">{{ $hotel->country ?? '—' }}</div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4 font-weight-bold">Email :</div>
                    <div class="col-sm-8">{{ $hotel->email ?? '—' }}</div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4 font-weight-bold">Téléphone :</div>
                    <div class="col-sm-8">{{ $hotel->phone ?? '—' }}</div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4 font-weight-bold">Étoiles :</div>
                    <div class="col-sm-8">
                        @for ($i = 0; $i < $hotel->stars; $i++)
                            ⭐
                        @endfor
                        @if ($hotel->stars == 0)
                            —
                        @endif
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4 font-weight-bold">Créé le :</div>
                    <div class="col-sm-8">{{ $hotel->created_at->format('d/m/Y') }}</div>
                </div>

            </div>

            <div class="card-footer">

                <a href="{{ route('hotels.index') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i> Retour
                </a>

                <a href="{{ route('hotels.edit', $hotel) }}" class="btn btn-warning">
                    <i class="fas fa-edit"></i> Modifier
                </a>

                <form action="{{ route('hotels.destroy', $hotel) }}" method="POST" class="d-inline">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger" onclick="return confirm('Supprimer cet hôtel ?')">
                        <i class="fas fa-trash"></i> Supprimer
                    </button>
                </form>

            </div>
        </div>

    </div>
</div>

@stop