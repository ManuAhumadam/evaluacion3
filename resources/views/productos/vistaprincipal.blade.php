@extends('layouts.master')
<title>Listado</title>

@section('content')
<h3>Total disponibles:</h3>
<hr class="border border-primary border-3 opacity-50">
<div class="container-sm">
    <table class="table table-striped table-hover">
        <tr>
            <td align="center"><b>ID Producto</td>
            <td align="center"><b>Nombre Celular</td>
            <td align="center"><b>Cantidad Stock</td>
            <td align="center"><b>Detalle</td>
            <td align="center"><b>Valor</td>
            <td></td>
            <td></td>
        </tr>
        @foreach($productos as $producto)
        <tr>
            <td align="center">{{ $producto->id }}</td>
            <td align="center">{{ $producto->nombre }}</td>
            <td align="center">{{ $producto->cantidad }}</td>
            <td align="center">{{ $producto->descripcion }}</td>
            <td align="center">{{ $producto->valor }}</td>
            <td><a href="/productos/{{ $producto->id }}/edit" type="button" class="btn btn-warning">Editar</a></td>
            <td><form action="{{route('productos.destroy', $producto)}}" method="post">
                @method('delete')
                <button type="submit" class="btn btn-danger">Eliminar</button></form></td>
        </tr>
        @endforeach
    </table>
</div>
<br>
<br>
<h3>Agregar nuevo celular:</h3>
<br><a href="/productos/create" type="button" class="btn btn-success">Agregar</a>
<hr class="border border-primary border-3 opacity-50">
@stop