@extends('layouts.master')

@section('content')

@if(isset($productos))
    <h2>Resultado de la busqueda:</h2>
    <h4><b>{{ $productos[0]->nombre }}</h4>
    
@else
    <h2>Resultado Busqueda: {{ $search }}</h2>

@endif

<hr class="border border-primary border-3 opacity-50">
@stop