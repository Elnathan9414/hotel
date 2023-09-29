
@extends('adminlte::page')




@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Informations de l'entreprise</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
          <i class="fas fa-minus"></i>
        </button>
        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
          <i class="fas fa-times"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-12 col-md-12 col-lg-12 order-2 order-md-1">
          <div class="row">
            <div class="col-12 col-sm-4 col-md-12">
              <div class="info-box bg-light">
                <div class="info-box-content">
                  <span class="info-box-text text-center text-muted">Nom de l'entreprise</span>
                  <span class="info-box-number text-center text-muted mb-0">{{ $entreprise->nomEntreprise }}</span>
                  <span class="info-box-text text-center text-muted">Localisation</span>
                  <span class="info-box-number text-center text-muted mb-0">{{ $entreprise->localisationEntreprise }}</span>
                  <span class="info-box-text text-center text-muted">Contact</span>
                  <span class="info-box-number text-center text-muted mb-0">{{ $entreprise->contactEntreprise }}</span>
                  <span class="info-box-text text-center text-muted">Email</span>
                  <span class="info-box-number text-center text-muted mb-0">{{ $entreprise->emailEntreprise }}</span>
                </div>
              </div>
            <div>
                <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                    <i class="fas fa-print"></i> Imprimer
                  </button>
              <a href="{{route('entreprise.index')}}" class="btn btn-danger" ><span class="cil-contrast btn-icon mr-4"></span> Retour</a>
            </div>
        </div>
            </div>
            
        
          
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->



</div>
<!-- /.content-wrapper -->
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop