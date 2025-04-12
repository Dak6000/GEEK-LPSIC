<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Optimisation des assets avec versionnage -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <!-- Préchargement des polices -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>Findy</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" style="color: #8C2711; font-size: 2rem; font-weight: 700;" href="{{ route('index') }}">Findy</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                    <a class="nav-link active" style="color: #BF5B21; font-size: 17px;" aria-current="page" href="{{ route('index') }}">Accueil</a>
                </li>
                
                @auth
                    <!-- Menu Orientation (visible seulement quand connecté) -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" style="color: #BF5B21; font-size: 17px;" href="#" id="orientationDropdown" role="button" data-bs-toggle="dropdown">
                            Orientation
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route("details") }}#bepc">Après le BEPC</a></li>
                            <li><a class="dropdown-item" href="{{ route("details") }}#bac">Après le BAC</a></li>
                            <li><a class="dropdown-item" href="{{ route("details") }}#bts">BTS</a></li>
                            <li><a class="dropdown-item" href="{{ route("details") }}#licence">Licences</a></li>
                            <li><a class="dropdown-item" href="{{ route("details") }}#master">Masters</a></li>
                            <li><a class="dropdown-item" href="{{ route("details") }}#doctorat">Doctorats</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="{{ route("details") }}">Métiers</a></li>
                        </ul>
                    </li>

                    <!-- Menu Quiz (visible seulement quand connecté) -->
                    <li class="nav-item">
                        <a class="nav-link" style="color: #BF5B21; font-size: 17px;" aria-current="page" href="#">Quiz</a>
                    </li>

                    <!-- Nouveau menu Cours -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" style="color: #BF5B21; font-size: 17px;" href="#" id="coursDropdown" role="button" data-bs-toggle="dropdown">
                            Cours
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route("cours") }}">Tous les cours</a></li>
                            <li><a class="dropdown-item" href="{{ route("cours") }}">Mes cours</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="{{ route("cours") }}">Proposer un cours</a></li>
                        </ul>
                    </li>

                    <!-- Nouveau menu Mentor -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" style="color: #BF5B21; font-size: 17px;" href="#" id="mentorDropdown" role="button" data-bs-toggle="dropdown">
                            Mentor
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Trouver un mentor</a></li>
                            <li><a class="dropdown-item" href="#">Devenir mentor</a></li>
                            <li><a class="dropdown-item" href="#">Mes mentors</a></li>
                        </ul>
                    </li>
                @endauth
            </ul>
            
            <div class="d-flex align-items-center">
                @auth
                    <div class="dropdown profile-dropdown">
                        <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle" style="color: #BF5B21; font-size: 17px;" id="dropdownUser" data-bs-toggle="dropdown" aria-expanded="false">
                            <!-- Optimisation de l'image de profil -->
                            <img src="{{ Auth::user()->photo ? asset('storage/profiles/'.Auth::user()->photo) : asset('images/default-profile.png') }}" 
                                 class="profile-pic rounded-circle" 
                                 alt="Photo de profil"
                                 width="40"
                                 height="40"
                                 loading="lazy">
                            <span class="ms-2 d-none d-sm-inline">{{ Auth::user()->name }}</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownUser">
                            <li><a class="dropdown-item" href="{{ route('profile') }}"><i class="fas fa-user me-2"></i>Mon profil</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-cog me-2"></i>Paramètres</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item"><i class="fas fa-sign-out-alt me-2"></i>Déconnexion</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                @else
                    <a class="btn m-2" style="color: #8C2711" aria-current="page" href="{{ route('login') }}">Connexion</a>
                    <a class="btn m-2" style="background-color: #8C2711; color: #FFFFFF;" aria-current="page" href="{{ route('register') }}">Inscription</a>
                @endauth                
            </div>
        </div>
    </div>
  </nav>

    <main class="container py-4">
        @yield('contenu')
    </main>

    <!-- Chargement différé des scripts -->
    <script defer src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script>
        // Optimisation du script de navbar scroll
        document.addEventListener('DOMContentLoaded', function() {
            let lastScroll = 0;
            const navbar = document.querySelector('.navbar');
            const navbarHeight = navbar.offsetHeight;
            
            window.addEventListener('scroll', function() {
                const currentScroll = window.pageYOffset;
                
                if (currentScroll <= 0) {
                    navbar.classList.remove('navbar-hidden');
                    return;
                }
                
                if (currentScroll > lastScroll && currentScroll > navbarHeight && !navbar.classList.contains('navbar-hidden')) {
                    navbar.classList.add('navbar-hidden');
                } else if (currentScroll < lastScroll && navbar.classList.contains('navbar-hidden')) {
                    navbar.classList.remove('navbar-hidden');
                }
                
                lastScroll = currentScroll;
            });
        });
    </script>
    @stack('scripts') <!-- Pour les scripts spécifiques aux pages -->
</body>
</html>