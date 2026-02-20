@extends('adminlte::page')

@section('title', 'Ajouter un client')

@section('content_header')
    <h1>Ajouter un client</h1>
@stop

@section('content')

<div class="row">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header bg-primary">
                <h3 class="card-title">Nouveau client</h3>
            </div>

            <form action="{{ route('client.store') }}" method="POST">
                @csrf

                <div class="card-body">

                    <div class="form-group">
                        <label>Prénom</label>
                        <input type="text" name="first_name" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Nom</label>
                        <input type="text" name="last_name" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Email (optionnel)</label>
                        <input type="email" name="email" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Téléphone (optionnel)</label>
                        <input type="text" name="phone" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Notes</label>
                        <textarea name="notes" class="form-control" rows="3"></textarea>
                    </div>

                </div>

                <div class="card-footer">
                    <a href="{{ route('client.index') }}" class="btn btn-secondary">
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