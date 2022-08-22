@extends('layouts.master')
<title>Sucursales</title>

@section('content')
<h3>Nuestras Sucursales:</h3>
<hr class="border border-primary border-3 opacity-50">
<div class="row">
    @foreach($sucursales as $sucursal)
    <div class="col-4">
        <div class="card" style="height: 42rem;">

            @if(Storage::disk('imagenes')->has($sucursal->imagen))
                <img class="card-img-top" src="{{ url('picture/'.$sucursal->imagen) }}" alt="{{ $sucursal->nombre }}">
            @else
                <img class="card-img-top" src="{{ $sucursal->imagen }}" alt="{{ $sucursal->nombre }}">
            @endif

            <div class="card-body text-center">
                <h4 class="card-tittle"><b>{{ $sucursal->nombre }}</b></h4>
                <h5 class="card-text">{{ $sucursal->direccion }}</h5>
                <p class="card-text text-muted">{{\FormatDate::LongTimeFilter($sucursal->created_at) }}</p>
            </div>
            <div class="card-footer text-center" role="group">
                <a href="/productos/{{ $sucursal->id }}" type="button" class="btn btn-primary">Ingresar Stock Sucursal</a>
            </div>
        </div>
        <br>
    </div>
    @endforeach

</div>

<br>
<br>
<a href="/sucursales/create" type="button" class="btn btn-warning">Agregar Sucursal</a>
<hr class="border border-primary border-3 opacity-50">
@stop