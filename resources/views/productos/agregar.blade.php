@extends('layouts.master')
<title>Agregar</title>

@section('content')
<h3>Ingrese producto:</h3>
<hr class="border border-primary border-3 opacity-50">
<div class="container-fluid">
    <form action="{{ url('/productos')}}" method="POST">

        <div class="form-floating mb-3 input-group-lg">
            <input type="text" class="form-control" name="codigounico" id="codigounico" placeholder="">
            <label for="codigounico"><b>Codigo Unico - SKU</b></label>
        </div>

        <div class="form-floating mb-3 input-group-lg">
            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="">
            <label for="nombre"><b>Nombre del producto</b></label>
        </div>

        <div class="form-floating mb-3 input-group-lg">
            <input type="number" class="form-control" name="cantidad" id="cantidad" placeholder="">
            <label for="cantidad"><b>Cantidad unidades - Stock</b></label>
        </div>

        <div class="form-floating mb-3 input-group-lg">
            <input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="">
            <label for="descripcion"><b>Descripción del producto</b></label>
        </div>

        <div class="form-floating mb-3 input-group-lg">
            <input type="number" class="form-control" name="valor" id="valor" placeholder="">
            <label for="valor"><b>Precio venta producto</b></label>
        </div>
        <div>
            <hr>
            <h4>Seleccione Gama del producto:</h4>
            <p>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="categoria_id" id="categoria_id1" value="1" checked>
                <label class="form-check-label" for="categoria_id">
                    <b>Gama Alta</b>
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="categoria_id" id="categoria_id2" value="2">
                <label class="form-check-label" for="categoria_id2">
                    <b>Gama Media</b>
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="categoria_id" id="categoria_id3" value="3">
                <label class="form-check-label" for="categoria_id3">
                    <b>Gama Baja</b>
                </label>
            </div>
            <hr>

            <h4>Seleccione Sucursal deseada:</h4>
            <p>
            <div class="mb-3">
                <select name="sucursal_id" id="sucursal_id" class="form-select btn-lg" aria-label=".form-select-lg example">
                    <option name="sucursal_id" selected>Seleccione una sucursal</option>
                    <option name="sucursal_id" value="1">Santiago</option>
                    <option name="sucursal_id" value="2">Viña de Mar</option>
                    <option name="sucursal_id" value="3">Quilpué</option>
                </select>
            </div>
            <br>
            <div class="mb-3 text-center">
                <button type="submit" class="btn btn-success">Agregar celular</button>
            </div>
            @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

    </form>
    <br>
    <hr class="border border-primary border-2 opacity-25">
    <a class="nav-link" href="/productos"><img src="/img/back.png" width="150" height="80"></a>
</div>
</div>
<hr class="border border-primary border-3 opacity-50">
@stop