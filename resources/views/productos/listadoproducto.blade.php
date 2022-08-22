@extends('layouts.master')
<title>Listado</title>

@section('content')
<h3>Productos disponibles en esta sucursal:</h3>
<hr class="border border-primary border-3 opacity-50">

@foreach($productos as $producto)
<div class="d-grid gap-2 col-6 mx-auto">

<div class="accordion accordion-flush" id="accordionFlushExample">
    <div class="accordion-item">
        <h1 class="accordion-header" id="flush-headingOne">
            <button class="accordion-button collapsed btn-lg btn-warning" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                {{ $producto->nombre }}
            </button>
        </h1>
        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body"><strong>Detalle: {{ $producto->descripcion }}</strong></div>
        </div>
    </div>
</div>
</div>
<br>
@endforeach

<br>
<hr class="border border-primary border-2 opacity-25">
<a href="/sucursales" type="button" class="btn btn-danger">Regresar</a>
<hr class="border border-primary border-3 opacity-50">
@stop