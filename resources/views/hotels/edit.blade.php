@extends('adminlte::page')

@section('title', 'Modifier un hôtel')

@section('content_header')
    <h1>Modifier l'hôtel</h1>
@stop

@section('content')

<div class="row">
    <div class="col-12">

        <div class="card">
            <div class="card-header bg-warning">
                <h3 class="card-title">Éditer : {{ $hotel->name }}</h3>
            </div>

            <form action="{{ route('hotels.update', $hotel) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="card-body">

                    <div class="form-group">
                        <label>Nom de l'hôtel</label>
                        <input type="text" name="name" class="form-control"
                               value="{{ old('name', $hotel->name) }}" required>
                    </div>

                    <div class="form-group">
                        <label>Adresse</label>
                        <input type="text" name="address" class="form-control"
                               value="{{ old('address', $hotel->address) }}">
                    </div>

                    <div class="form-group">
                        <label>Ville</label>
                        <input type="text" name="city" class="form-control"
                               value="{{ old('city', $hotel->city) }}">
                    </div>

                    <div class="form-group">
                        <label>Pays</label>
                        <input type="text" name="country" class="form-control"
                               value="{{ old('country', $hotel->country) }}">
                    </div>

                    <div class="form-group">
                        <label>Email de contact</label>
                        <input type="email" name="email" class="form-control"
                               value="{{ old('email', $hotel->email) }}">
                    </div>

                    <div class="form-group">
                        <label>Téléphone</label>
                        <input type="text" name="phone" class="form-control"
                               value="{{ old('phone', $hotel->phone) }}">
                    </div>

                    <div class="form-group">
                        <label>Nombre d'étoiles</label>
                        <select name="stars" class="form-control" required>
                            @for ($i = 0; $i <= 5; $i++)
                                <option value="{{ $i }}" {{ $hotel->stars == $i ? 'selected' : '' }}>
                                    {{ $i }} étoile{{ $i > 1 ? 's' : '' }}
                                </option>
                            @endfor
                        </select>
                    </div>

                </div>

                <div class="card-footer">
                    <a href="{{ route('hotels.index') }}" class="btn btn-secondary">
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