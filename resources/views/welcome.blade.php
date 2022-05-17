<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Accueil</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('style/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/bootstrap/css/bootstrap.css') }}">

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" >
        <div class="container-fluid " style="background-color: black;">
            <li class="nav-item">
                <a class="nav-link active" href="{{url('/')}}">ACCUEIL</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('formulaire')}}">FORMULAIRE</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="{{route('liste')}}" tabindex="-1" aria-disabled="true">LISTE</a>
            </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Recherche</button>
            </form>
        </div>
    </nav>
    <img src="" alt="">
    @yield('content')
</body>

</html>
