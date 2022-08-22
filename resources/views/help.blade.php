@extends('layouts.master')
<title>Ayuda</title>

@section('content')
<h3>Centro de ayuda</h3>
<hr class="border border-primary border-3 opacity-50">

<div class="mb-3">
  <h5><label for="textArea" class="form-label">Hola, ¿cómo podemos ayudarte?</label></h5>
  <textarea class="form-control" id="textArea" rows="3"></textarea>
</div>
<br>
<h5>Búsquedas frecuentes</h5>
<br>
<button type="button" class="btn btn-primary">Cambios y devoluciones</button>
<button type="button" class="btn btn-primary">Garantía</button>
<button type="button" class="btn btn-primary">Horarios y plazo entrega</button>
<button type="button" class="btn btn-primary">Servicio técnico</button>
<hr class="border border-primary border-3 opacity-50">

@stop