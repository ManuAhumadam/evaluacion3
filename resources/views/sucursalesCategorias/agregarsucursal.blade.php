@extends('layouts.master')
<title>Sucursal</title>

@section('content')
<h3>Agregar Sucursal:</h3>
<hr class="border border-primary border-3 opacity-50">
<div class="container-sm">
    <form action="{{ url('/sucursales')}}" method="POST" enctype="multipart/form-data">

        <div class="mb-3">
            <label for="nombre" class="form-label"><b>Nombre</label>
            <input id="nombre" name="nombre" type="text" class="form-control" placeholder="Ingrese nombre Sucursal" aria-label="Recipient one">
        </div>

        <div class="mb-3">
            <label for="direccion" class="form-label"><b>Dirección</label>
            <input id="direccion" name="direccion" type="text" class="form-control" placeholder="Ingrese dirección" aria-label="Recipient two">
        </div>

        <br>
        <div class="mb-3">
            <label for="imagen" class="form-label"><b>Cargar imagen</label>
            <input id="imagen" name="imagen" type="file" class="form-control" aria-label="Recipient three" accept=".jpg, .png, .jpeg">
        </div>

        <div class="mb-3 text-center">
            <button type="submit" class="btn btn-success">Agregar Sucursal</button>
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
    <hr class="border border-primary border-2 opacity-25">
    <div class="mb-3">
        <a class="nav-link" href="/sucursales"><img src="/img/back.png" width="150" height="80"></a>
    </div>
</div>
@stop