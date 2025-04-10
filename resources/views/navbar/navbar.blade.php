<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset("css/bootstrap.min.css") }}">
    <link rel="stylesheet" href="{{ asset("css/styles.css") }}">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Findy</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" style="color: #8C2711; font-size: 2rem; font-weight: 700;" href="{{ route("index") }}">Findy</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                    <a class="nav-link active" style="color: #BF5B21; font-size: 17px;" aria-current="page" href="{{ route("index") }}">Accueil</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" style="color: #BF5B21; font-size: 17px;" href="#" id="orientationDropdown" role="button" data-bs-toggle="dropdown">
                        Orientation
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Après le BEPC</a></li>
                        <li><a class="dropdown-item" href="#">Après le BAC</a></li>
                        <li><a class="dropdown-item" href="#">BTS</a></li>
                        <li><a class="dropdown-item" href="#">Licences</a></li>
                        <li><a class="dropdown-item" href="#">Masters</a></li>
                        <li><a class="dropdown-item" href="#">Doctorats</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Métiers</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: #BF5B21; font-size: 17px;" aria-current="page" href="#">Quiz</a>
                </li>
            </ul>
            <div class="d-flex">
                @auth
                    <div class="d-flex align-items-center">
                        <a href="{{ route('profile') }}" class="btn m-2" style="color: #8C2711">
                            Mon Profil
                        </a>
                        <form action="{{ route('logout') }}" method="POST" class="m-2">
                            @csrf
                            <button type="submit" class="btn" style="color: #8C2711;">Déconnexion</button>
                        </form>
                    </div>
                @else
                    <a class="btn m-2" style="color: #8C2711" aria-current="page" href="{{ route('login') }}">Connexion</a>
                    <a class="btn m-2" style="background-color: #8C2711; color: #FFFFFF;" aria-current="page" href="{{ route('register') }}">Inscription</a>
                @endauth                
            </div>
        </div>
    </div>
  </nav>

    <main class="container">

        @yield("contenu")
    </main>

<script defer src="{{ asset("js/bootstrap.bundle.min.js") }}"></script>
</body>
</html>