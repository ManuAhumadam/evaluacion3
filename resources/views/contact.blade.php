@extends('layouts.master')
<title>Contact</title>

@section('content')
<h3>Contacto:</h3>
Por favor, especifique el motivo de su consulta para ofrecerle el mejor servicio.

<hr class="border border-primary border-3 opacity-50">
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
  <label class="form-check-label" for="flexRadioDefault1">
    Solicito información sobre los productos o catálogos.
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
  <label class="form-check-label" for="flexRadioDefault2">
    Solicito la visita de un técnico CIISA.
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
  <label class="form-check-label" for="flexRadioDefault3">
    Solicito información general o corporativa.
  </label>
</div>
<hr>

<form method="post" action="{{ route('sendContact') }}">
  <div class="row">
    <div class="col">
      <input type="text" id="name" name="name" class="form-control" placeholder="Nombre" aria-label="Nombre">
    </div>
    <div class="col">
      <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Apellidos" aria-label="Apellidos">
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-6">
      <input type="text" id="email" name="email" class="form-control" placeholder="Email" aria-label="Email">
    </div>
    <div class="col-1">
    <span class="input-group-text fs-3">+56 9</span>
    </div>
    <div class="col-5">
      <input type="text" id="numbercontact" name="numbercontact" class="form-control" placeholder="Número contacto" aria-label="Contacto">
    </div>
  </div>
  <br>
  <div class="col">
    <button type="submit" class="btn btn-success">Enviar formulario</button>
  </div>
  <hr class="border border-primary border-3 opacity-50">
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

@stop