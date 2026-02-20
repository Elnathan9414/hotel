@extends('adminlte::page')

@section('title', 'Hôtels')

@section('content_header')
    <h1>Liste des hôtels</h1>
@stop

@section('content')

{{-- ===================== --}}
{{--   TABLEAU DE BORD     --}}
{{-- ===================== --}}

<div class="row">

    <div class="col-lg-4 col-12">
        <div class="small-box bg-info">
            <div class="inner">
                <h3>{{ $hotels->count() }}</h3>
                <p>Nombre total d'hôtels</p>
            </div>
            <div class="icon">
                <i class="fas fa-hotel"></i>
            </div>
        </div>
    </div>

    <div class="col-lg-4 col-12">
        <div class="small-box bg-success">
            <div class="inner">
                <h3>{{ $hotels->groupBy('city')->count() }}</h3>
                <p>villes représentées</p>
            </div>
            <div class="icon">
                <i class="fas fa-star"></i>
            </div>
        </div>
    </div>

    <div class="col-lg-4 col-12">
        <div class="small-box bg-warning">
            <div class="inner">
                <h3>{{ $hotels->groupBy('country')->count() }}</h3>
                <p>Pays représentés</p>
            </div>
            <div class="icon">
                <i class="fas fa-globe"></i>
            </div>
        </div>
    </div>

</div>

{{-- ===================== --}}
{{--   TABLEAU PRINCIPAL   --}}
{{-- ===================== --}}

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Tous les hôtels</h3>

        <div class="card-tools">
            <a href="{{ route('hotels.create') }}" class="btn btn-primary">
                <i class="fas fa-plus"></i> Ajouter un hôtel
            </a>
        </div>
    </div>

    <div class="card-body">

        <table id="hotels-table" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Ville</th>
                    <th>Pays</th>
                    <th>Email</th>
                    <th>Téléphone</th>
                    <th>Étoiles</th>
                    <th style="width: 150px;">Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($hotels as $hotel)
                <tr>
                    <td>{{ $hotel->id }}</td>
                    <td>{{ $hotel->name }}</td>
                    <td>{{ $hotel->city }}</td>
                    <td>{{ $hotel->country }}</td>
                    <td>{{ $hotel->email }}</td>
                    <td>{{ $hotel->phone }}</td>
                    <td>
                        @for ($i = 0; $i < $hotel->stars; $i++)
                            ⭐
                        @endfor
                    </td>

                    <td>
                        <a href="{{ route('hotels.show', $hotel) }}" class="btn btn-sm btn-info">
                            <i class="fas fa-eye"></i>
                        </a>

                        <a href="{{ route('hotels.edit', $hotel) }}" class="btn btn-sm btn-warning">
                            <i class="fas fa-edit"></i>
                        </a>

                        <form action="{{ route('hotels.destroy', $hotel) }}" method="POST" class="d-inline">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Supprimer cet hôtel ?')">
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

@section('js')
<script>
    $(document).ready(function() {
        $('#hotels-table').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.13.4/i18n/fr-FR.json"
            },
            "pageLength": 10,
            "ordering": true,
            "responsive": true
        });
    });
</script>
@stop