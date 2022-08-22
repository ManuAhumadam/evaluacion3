<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Principal</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>

  <!--Header-->
  @section('header')
  <div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand">Stocker</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/sucursales">Sucursales</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/productos">Productos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/contact">Contacto</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/help">Help!</a>
            </li>
          </ul>
        </div>
        <form class="d-flex" action="{{ url('buscar')}}" role="search">
          <input class="form-control me-3" type="search" placeholder="Buscar" aria-label="Search" name="search">
          <button class="btn btn-outline-success" type="submit">Buscar</button>
        </form>
      </div>
    </nav>
  </div>
  <hr>
  @show

  <!--Boody-->
  <div class='container'>
    @yield('content')
  </div>

  <!--Footer-->
  @section('footer')
   <div class="row">
    <div class="col-4"></div>
    <div class="col-4">
      <h5 class="nav justify-content-center">Copyright 2001-2022 INCARED All rights reserved.</h5>
    </div>
    <div class="col-4">
      <ul class="nav justify-content-center">
        <li class="nav-item">
          <a class="nav-link" href="http://www.facebook.com/"><img src="/img/facebook.png" width="45" height="45"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://www.instagram.com/"><img src="/img/instagram.png" width="45" height="45"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://www.twitter.com/"><img src="/img/twitter.png" width="45" height="45"></a>
        </li>
      </ul>
    </div>

  </div>
  @show

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>