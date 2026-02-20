@extends('adminlte::page')

@section('title', 'Ajouter une chambre')

@section('content_header')
    <h1>Ajouter une chambre</h1>
@stop

@section('content')

<div class="row">
    <div class="col-12">

        <div class="card">
            <div class="card-header bg-primary">
                <h3 class="card-title">Nouvelle chambre</h3>
            </div>

            <form action="{{ route('rooms.store') }}" method="POST">
                @csrf

                <div class="card-body">

                    <div class="form-group">
                        <label>Hôtel</label>
                        <select name="hotel_id" class="form-control" required>
                            @foreach ($hotels as $hotel)
                                <option value="{{ $hotel->id }}">{{ $hotel->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Numéro</label>
                        <input type="text" name="number" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Type</label>
                        <input type="text" name="type" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Capacité</label>
                        <input type="number" name="capacity" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Prix par nuit</label>
                        <input type="number" step="0.01" name="price_per_night" class="form-control" required>
                    </div>

                </div>

                <div class="card-footer">
                    <a href="{{ route('rooms.index') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i> Retour
                    </a>

                    <button type="submit" class="btn btn-success">
                        <i class="fas fa-check"></i> Enregistrer
                    </button>
                </div>

            </form>
        </div>

    </div>
</div>

@stop