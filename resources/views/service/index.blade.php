
@extends('adminlte::page')

@section('content')

<div class="card">
    <div class="card-header">
         
    <h1 class="card-title">Services</h1>
    <div class="d-flex justify-content-end">
        <a href="{{route('service.create')}}" class="btn btn-success"><span class="fa fa-plus-circle"></span> Ajouter</a>
     </div>
    </div>
   {{-- Setup data for datatables --}}
@php
$heads = [
    'ID',
    'Service',
    'Description',
    //['label' => 'Email', 'width' => 40],
    ['label' => 'Actions', 'no-export' => true, 'width' => 5],
];

$btnEdit = '<button class="btn btn-xs btn-default text-primary mx-1 shadow" title="Edit">
                <i class="fa fa-lg fa-fw fa-pen"></i>
              
            </button>';
$btnDelete = '<button class="btn btn-xs btn-default text-danger mx-1 shadow" title="Delete">
                  <i class="fa fa-lg fa-fw fa-trash"></i>
              </button>';
$btnDetails = '<button class="btn btn-xs btn-default text-teal mx-1 shadow" title="Details">
                   <i class="fa fa-lg fa-fw fa-eye"></i>
               </button>';


$entData  = array();
foreach ($service as $ser) {
    # code...
    $entData []= [
        $ser->id,
        $ser->nomService,
        $ser->descriptionService,
       
        
        '<nobr><a class="btn btn-xs btn-default text-primary mx-1 shadow" title="Show" href="'.url("service/{$ser->id}").'"> <i class="fa fa-lg fa-fw fa-eye"></i></a> <a class="btn btn-xs btn-default text-success mx-1 shadow" title="Editer" href="'.url("service/{$ser->id}/edit").'"> <i class="fa fa-lg fa-fw fa-pen"></i></a> <a class="btn btn-xs btn-default text-danger mx-1 shadow" title="Delete" href="'.url("service/{$ser->id}").'"> <i class="fa fa-lg fa-fw fa-trash"></i></a></nobr>'
       // '<nobr><a class="btn btn-xs btn-default text-primary mx-1 shadow" title="Show" href="'.url("entreprise/{$ent->id}").'"> <i class="fa fa-lg fa-fw fa-eye"></i></a></nobr>'

];
}  


$config = [
    'order' => [[1, 'asc']],
    'columns' => [null, null, null, ['orderable' => false]],
];
$config['data'] = $entData;
@endphp

{{-- Minimal example / fill data using the component slot
<x-adminlte-datatable id="table1" :heads="$heads">
    @foreach($config['data'] as $row)
        <tr>
            @foreach($row as $cell)
                <td>{!! $cell !!}</td>
            @endforeach
        </tr>
    @endforeach
</x-adminlte-datatable> --}}

{{-- Compressed with style options / fill data using the plugin config --}}
<x-adminlte-datatable id="table2" :heads="$heads" head-theme="dark" :config="$config"
    striped hoverable bordered compressed/>

@endsection