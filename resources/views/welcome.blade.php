<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gestion_School</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('style/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/bootstrap/css/bootstrap.css') }}">

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid"  style="background-color: red ;">
          <a class="navbar-brand" href="#">
            <img src="image/clin.jpg" style="height: 10vh;" alt="">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item" style=" margin-right: 35px; margin-left: 50px; text-align: center;">
                <a class="nav-link" style="color: red; font-size: 20px;width: 200px;" href="{{url('/') }}">
                  <button type="button" class="btn btn-outline-light" style="width: 100%; height: 40px; ">ACCUEIL</button>
                </a>
              </li>
              <li class="nav-item" style=" margin-right: 35px; margin-left: 50px; text-align: center;">
                <a class="nav-link" style="color: red; font-size: 20px;width: 200px;" href="{{route('formulaire') }}">
                  <button type="button" class="btn btn-outline-light" style="width: 100%; height: 40px; ">FORMULAIRE</button>
                </a>
              </li>
              <li class="nav-item" style=" height: 60px; margin-right: 35px;margin-left: 30px; text-align: center;">
                <a class="nav-link" style="color: black; font-size: 20px; width: 200px;" href="{{route('liste') }}">
                  <button type="button" class="btn btn-outline-light" style="width: 100%; height: 40px; ">LISTE</button>
                </a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" id="myInput" onkeyup="myFunction()" type="search" aria-label="Search">
              <button class="btn btn-outline-light" style="background-color: rgb(74, 15, 236);" type="submit">Recherche</button>
            </form>
          </div>
        </div>
      </nav>
    <div class="col md-6"> <br> <br>
        <h1 style="font-family: Lucida Calligraphy ; text-align: center; color: red; font-size: 4em;">Bienvenu dans la gestion School</h1>
        <h3 style="font-family: Times New Roman; text-align: center;"></h3>
      </div>
    <img src="{{ asset('image/img.jpg') }}" class="d-block w-100" height="500px" alt="">
    @yield('content')
</body>

</html>
