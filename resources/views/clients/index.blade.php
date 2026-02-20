@extends('adminlte::page')

@section('title', 'Clients')

@section('content_header')
    <h1>Liste des clients</h1>
@stop

@section('content')


<div class="card">
    <div class="card-header">
        
<div class="row">

    <div class="col-lg-4 col-12">
        <div class="small-box bg-info">
            <div class="inner">
                <h3>{{ $stats['total'] }}</h3>
                <p>Total des clients</p>
            </div>
            <div class="icon">
                <i class="fas fa-users"></i>
            </div>
        </div>
    </div>

    <div class="col-lg-4 col-12">
        <div class="small-box bg-success">
            <div class="inner">
                <h3>{{ $stats['this_month'] }}</h3>
                <p>Nouveaux clients ce mois</p>
            </div>
            <div class="icon">
                <i class="fas fa-user-plus"></i>
            </div>
        </div>
    </div>

    <div class="col-lg-4 col-12">
        <div class="small-box bg-warning">
            <div class="inner">
                <h3>{{ $stats['today'] }}</h3>
                <p>Clients ajoutés aujourd'hui</p>
            </div>
            <div class="icon">
                <i class="fas fa-sticky-note"></i>
            </div>
        </div>
    </div>

</div>
        <div class="card-tools">
            <a href="{{ route('client.create') }}" class="btn btn-primary">
                <i class="fas fa-plus"></i> Ajouter un client
            </a>
        </div>
    </div>

    <div class="card-body">

        <table id="clients-table" class="table table-bordered table-striped table-hover dt-responsive nowrap" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom complet</th>
                    <th>Email</th>
                    <th>Téléphone</th>
                    <th>Date d'ajout</th>
                    <th style="width: 120px;">Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($clients as $client)
                <tr>
                    <td>{{ $client->id }}</td>
                    <td>{{ $client->full_name }}</td>
                    <td>{{ $client->email ?? '—' }}</td>
                    <td>{{ $client->phone ?? '—' }}</td>
                    <td>{{ $client->created_at->format('d/m/Y') }}</td>

                    <td>
                        <a href="{{ route('client.show', $client) }}" class="btn btn-sm btn-info">
                            <i class="fas fa-eye"></i>
                        </a>

                        <a href="{{ route('client.edit', $client) }}" class="btn btn-sm btn-warning">
                            <i class="fas fa-edit"></i>
                        </a>

                        <form action="{{ route('client.destroy', $client) }}" method="POST" class="d-inline">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Supprimer ce client ?')">
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
    $('#clients-table').DataTable({
        responsive: true,
        autoWidth: false,
        language: {
            url: "//cdn.datatables.net/plug-ins/1.13.6/i18n/fr-FR.json"
        }
    });
});
</script>

@stop


@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap4.min.css">
@stop