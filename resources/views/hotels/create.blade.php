@extends('adminlte::page')

@section('title', 'Ajouter un hôtel')

@section('content_header')
    <h1>Ajouter un hôtel</h1>
@stop

@section('content')

<div class="row">
    <div class="col-12">

        <div class="card">
            <div class="card-header bg-primary">
                <h3 class="card-title">Nouvel hôtel</h3>
            </div>

            <form action="{{ route('hotels.store') }}" method="POST">
                @csrf

                <div class="card-body">

                    <div class="form-group">
                        <label>Nom de l'hôtel</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Adresse</label>
                        <input type="text" name="address" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Ville</label>
                        <input type="text" name="city" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Pays</label>
                        <input type="text" name="country" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Email de contact</label>
                        <input type="email" name="email" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Téléphone</label>
                        <input type="text" name="phone" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Nombre d'étoiles</label>
                        <select name="stars" class="form-control" required>
                            <option value="0">0 étoile</option>
                            <option value="1">1 étoile</option>
                            <option value="2">2 étoiles</option>
                            <option value="3">3 étoiles</option>
                            <option value="4">4 étoiles</option>
                            <option value="5">5 étoiles</option>
                        </select>
                    </div>

                </div>

                <div class="card-footer">
                    <a href="{{ route('hotels.index') }}" class="btn btn-secondary">
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