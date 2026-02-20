@extends('adminlte::page')

@section('title', 'Modifier une chambre')

@section('content_header')
    <h1>Modifier la chambre</h1>
@stop

@section('content')

<div class="row">
    <div class="col-12">

        <div class="card">
            <div class="card-header bg-warning">
                <h3 class="card-title">Éditer la chambre #{{ $room->number }}</h3>
            </div>

            <form action="{{ route('rooms.update', $room) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="card-body">

                    <div class="form-group">
                        <label>Hôtel</label>
                        <select name="hotel_id" class="form-control" required>
                            @foreach ($hotels as $hotel)
                                <option value="{{ $hotel->id }}"
                                    {{ $hotel->id == $room->hotel_id ? 'selected' : '' }}>
                                    {{ $hotel->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Numéro</label>
                        <input type="text" name="number" class="form-control"
                               value="{{ old('number', $room->number) }}" required>
                    </div>

                    <div class="form-group">
                        <label>Type</label>
                        <input type="text" name="type" class="form-control"
                               value="{{ old('type', $room->type) }}" required>
                    </div>

                    <div class="form-group">
                        <label>Capacité</label>
                        <input type="number" name="capacity" class="form-control"
                               value="{{ old('capacity', $room->capacity) }}" required>
                    </div>

                    <div class="form-group">
                        <label>Prix par nuit</label>
                        <input type="number" step="0.01" name="price_per_night" class="form-control"
                               value="{{ old('price_per_night', $room->price_per_night) }}" required>
                    </div>

                </div>

                <div class="card-footer">
                    <a href="{{ route('rooms.index') }}" class="btn btn-secondary">
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