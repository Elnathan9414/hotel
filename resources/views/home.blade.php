
@extends('adminlte::page')



@section('title', 'Dashboard')

@section('content_header')
    <h1>TABLEAU DE BORD</h1>
@stop

@section('content')
    <div class="grid md:grid-cols-4 gap-6 mb-12 bg-slate-950 text-white">

    <div class="bg-slate-900 p-6 rounded-2xl">
        <p class="text-gray-400 text-sm">Taux d’occupation</p>
        <h3 class="text-2xl font-bold text-yellow-400">78%</h3>
    </div>

    <div class="bg-slate-900 p-6 rounded-2xl">
        <p class="text-gray-400 text-sm">Revenus mensuels</p>
        <h3 class="text-2xl font-bold text-yellow-400">45 000€</h3>
    </div>

    <div class="bg-slate-900 p-6 rounded-2xl">
        <p class="text-gray-400 text-sm">Chambres disponibles</p>
        <h3 class="text-2xl font-bold text-yellow-400">32</h3>
    </div>

    <div class="bg-slate-900 p-6 rounded-2xl">
        <p class="text-gray-400 text-sm">Réservations aujourd’hui</p>
        <h3 class="text-2xl font-bold text-yellow-400">14</h3>
    </div>

</div>

    <div class="bg-slate-950 p-6 rounded-2xl border border-slate-800">
        <iframe title="Sample Report Demo" width="1180" height="800.25" src="https://playground.powerbi.com/sampleReportEmbed" frameborder="0" allowFullScreen="true"></iframe>
    </div>

       
@stop

@section('css')
    
@stop

@section('js')
   <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
@stop