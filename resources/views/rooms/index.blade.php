@extends('adminlte::page')

@section('title', 'Chambres')

@section('content_header')
    <h1>Liste des chambres</h1>
@stop

@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Toutes les chambres</h3>

        <div class="card-tools">
            <a href="{{ route('rooms.create') }}" class="btn btn-primary">
                <i class="fas fa-plus"></i> Ajouter une chambre
            </a>
        </div>
    </div>

    <div class="card-body table-responsive p-0">

        <table class="table table-hover text-nowrap">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Numéro</th>
                    <th>Type</th>
                    <th>Capacité</th>
                    <th>Prix / nuit</th>
                    <th>Hôtel</th>
                    <th style="width: 150px;">Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($rooms as $room)
                <tr>
                    <td>{{ $room->id }}</td>
                    <td>{{ $room->number }}</td>
                    <td>{{ $room->type }}</td>
                    <td>{{ $room->capacity }}</td>
                    <td>{{ number_format($room->price_per_night, 2) }} $</td>
                    <td>{{ $room->hotel->name }}</td>

                    <td>
                        <a href="{{ route('rooms.show', $room) }}" class="btn btn-sm btn-info">
                            <i class="fas fa-eye"></i>
                        </a>

                        <a href="{{ route('rooms.edit', $room) }}" class="btn btn-sm btn-warning">
                            <i class="fas fa-edit"></i>
                        </a>

                        <form action="{{ route('rooms.destroy', $room) }}" method="POST" class="d-inline">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Supprimer cette chambre ?')">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>

    </div>
</div>

@stop