@extends('adminlte::page')

@section('title', 'Modifier un client')

@section('content_header')
    <h1>Modifier le client</h1>
@stop

@section('content')

<div class="row">
    <div class="col-md-12">

        <div class="card">
            <div class="card-header bg-warning">
                <h3 class="card-title">Éditer : {{ $client->full_name }}</h3>
            </div>

            <form action="{{ route('client.update', $client) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="card-body">

                    <div class="form-group">
                        <label>Prénom</label>
                        <input type="text" name="first_name" class="form-control"
                               value="{{ old('first_name', $client->first_name) }}" required>
                    </div>

                    <div class="form-group">
                        <label>Nom</label>
                        <input type="text" name="last_name" class="form-control"
                               value="{{ old('last_name', $client->last_name) }}" required>
                    </div>

                    <div class="form-group">
                        <label>Email (optionnel)</label>
                        <input type="email" name="email" class="form-control"
                               value="{{ old('email', $client->email) }}">
                    </div>

                    <div class="form-group">
                        <label>Téléphone (optionnel)</label>
                        <input type="text" name="phone" class="form-control"
                               value="{{ old('phone', $client->phone) }}">
                    </div>

                    <div class="form-group">
                        <label>Notes</label>
                        <textarea name="notes" class="form-control" rows="3">{{ old('notes', $client->notes) }}</textarea>
                    </div>

                </div>

                <div class="card-footer">
                    <a href="{{ route('client.index') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i> Retour
                    </a>

                    <button type="submit" class="btn btn-warning">
                        <i class="fas fa-save"></i> Mettre à jour
                    </button>
                </div>

            </form>
        </div>

    </div>
</div>

@stop