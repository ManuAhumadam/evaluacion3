@extends('layouts.master')
<title>Editar</title>

@section('content')
<h3>Editar el producto:</h3>
<hr class="border border-primary border-3 opacity-50">
<div class="container-fluid">
<form action="{{ route('productos.update', $producto)}}" method="post">
        @method('put')
        <div class="input-group">
            <label for="codigounico"><b>Codigo Unico - SKU</b></label>
            <input type="text" class="form-control" name="codigounico" id="codigounico" value="{{ $producto->codigounico }}">

        </div>
        <p>
        <div class="input-group">
            <label for="nombre"><b>Nombre del producto</b></label>
            <input type="text" class="form-control" name="nombre" id="nombre" value="{{ $producto->nombre }}">

        </div>
        <p>
        <div class="input-group">
            <label for="cantidad"><b>Cantidad unidades - Stock</b></label>
            <input type="number" class="form-control" name="cantidad" id="cantidad" value="{{ $producto->cantidad }}">

        </div>
        <p>
        <div class="input-group">
            <label for="descripcion"><b>Descripción del producto</b></label>
            <input type="text" class="form-control" name="descripcion" id="descripcion" value="{{ $producto->descripcion }}">

        </div>
        <p>
        <div class="input-group">
            <label for="valor"><b>Precio venta producto</b></label>
            <input type="number" class="form-control" name="valor" id="valor" value="{{ $producto->valor }}">

        </div>

        <br>
        <div class="mb-3 text-center">
            <button type="submit" class="btn btn-success">Actualizar datos</button>
        </div>

    </form>

    <br>
    <hr class="border border-primary border-2 opacity-25">
    <a class="nav-link" href="/productos"><img src="/img/back.png" width="150" height="80"></a>
</div>
</div>
<hr class="border border-primary border-3 opacity-50">




@stop