
@extends('adminlte::page')



@section('title', 'Dashboard')

@section('content_header')
    <h1>NOTIFICATIONS</h1>
@stop

@section('content')

    <div class="container-fluid">
    
    <div class="row">
    <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box">
    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>
    <div class="info-box-content">
    <span class="info-box-text">CLIENTS</span>
    <span class="info-box-number">
    10
    <small>%</small>
    </span>
    </div>
    
    </div>
    
    </div>
    
    <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box mb-3">
    <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-file-invoice"></i></span>
    <div class="info-box-content">
    <span class="info-box-text">FACTURES</span>
    <span class="info-box-number">41,410</span>
    </div>
    
    </div>
    
    </div>
    
    
    <div class="clearfix hidden-md-up"></div>
    <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box mb-3">
    <span class="info-box-icon bg-success elevation-1"><i class="fas fa-envelope"></i></span>
    <div class="info-box-content">
    <span class="info-box-text">EMAILS</span>
    <span class="info-box-number">760</span>
    </div>
    
    </div>
    
    </div>
    
    <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box mb-3">
    <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-phone"></i></span>
    <div class="info-box-content">
    <span class="info-box-text">WHATSAPP</span>
    <span class="info-box-number">2,000</span>
    </div>
   
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop