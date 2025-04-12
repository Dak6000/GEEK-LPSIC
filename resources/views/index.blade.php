@extends("navbar.navbar")

@section("contenu")
<div class="container">
    <!-- En-tête -->
    <div class="brand-header">Bienvenue sur Findy</div>
    
    <div class="row align-items-center p-5">
        <div class="col-md-6">
            <h1 class="main-title">Que voulez-vous faire ?</h1>
            <p class="description">
                Nous mettons à votre disposition une orientation<br>
                sélectionnée par notre équipe d'experts.<br>
                Bénéficiez d'une assistance personnalisée pour<br>
                votre orientation professionnelle.
            </p>
        </div>
        <div class="col-md-5">
            <img src="{{ asset('images/photo1.jpg') }}" class="img-fluid rounded-image w-80" alt="Photo d'accueil">
        </div>
    </div>

    <!-- Sections par niveau de diplôme -->
    <h1 class="brand-header" style="color: #8C2711">Niveau de Diplôme</h1>
    <div class="card-container">
        <!-- Niveau BEPC -->
        <div class="card orientation-card">
            <a href="{{ route("details") }}#bepc" class="text-decoration-none">
                <span class="material-icons card-icon">school</span>
                <div class="card-body">
                    <h3 class="card-title">BEPC</h3>
                    <p class="card-description">
                        • CAP/Métiers manuels<br>
                        • Formation professionnelle<br>
                        • Apprentissage
                    </p>
                </div>
            </a>
        </div>
    
        <!-- Niveau BAC -->
        <div class="card orientation-card">
            <a href="{{ route("details") }}#bac" class="text-decoration-none">
                <span class="material-icons card-icon">assignment</span>
                <div class="card-body">
                    <h3 class="card-title">BAC</h3>
                    <p class="card-description">
                        • BTS/DUT<br>
                        • Licence universitaire<br>
                        • Écoles spécialisées
                    </p>
                </div>
            </a>
        </div>
    
        <!-- Niveau BTS -->
        <div class="card orientation-card">
            <a href="{{ route("details") }}#bts" class="text-decoration-none">
                <span class="material-icons card-icon">work</span>
                <div class="card-body">
                    <h3 class="card-title">BTS</h3>
                    <p class="card-description">
                        • Entrée directe en entreprise<br>
                        • Licence professionnelle<br>
                        • Écoles d'ingénieurs
                    </p>
                </div>
            </a>
        </div>
        
        <!-- Niveau Licence -->
        <div class="card orientation-card">
            <a href="{{ route("details") }}#licence" class="text-decoration-none">
                <span class="material-icons card-icon">library_books</span>
                <div class="card-body">
                    <h3 class="card-title">Licence</h3>
                    <p class="card-description">
                        • Master recherche/pro<br>
                        • Écoles de commerce<br>
                        • Concours administratifs
                    </p>
                </div>
            </a>
        </div>
        
        <!-- Niveau Master -->
        <div class="card orientation-card">
            <a href="{{ route("details") }}#master" class="text-decoration-none">
                <span class="material-icons card-icon">star</span>
                <div class="card-body">
                    <h3 class="card-title">Master</h3>
                    <p class="card-description">
                        • Doctorat<br>
                        • Cadre en entreprise<br>
                        • Fonction publique catégorie A
                    </p>
                </div>
            </a>
        </div>
    
        <!-- Niveau Doctorat -->
        <div class="card orientation-card">
            <a href="{{ route("details")}}#doctorat " class="text-decoration-none">
                <span class="material-icons card-icon">verified</span>
                <div class="card-body">
                    <h3 class="card-title">Doctorat</h3>
                    <p class="card-description">
                        • Recherche académique<br>
                        • Expert consultant<br>
                        • Hautes fonctions publiques
                    </p>
                </div>
            </a>
        </div>
    </div>

    @auth
        <!-- Section Cours -->
        <section class="mt-5">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1 class="brand-header" style="color: #8C2711">Nos Cours Recommandés</h1>
                <a href="#" class="btn" style="background-color: #8C2711; color: #FFFFFF;">Voir tous les cours</a>
            </div>
            
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card h-100 course-card">
                        <img src="{{ asset("images/html.png") }}" 
                             class="card-img-top rounded-circle mx-auto mt-3" 
                             style="width: 100px; height: 100px; object-fit: cover;" 
                             alt="Photo du mentor">
                        <div class="card-body">
                            <h5 class="card-title">Programmation avec du HTML5</h5>
                            <p class="card-text text-muted">Le HTML5 est un langage coté web utilisé pour la conception de site web</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span style="color: #8C2711;">Programmation</span>
                                <a href="{{ route("cours") }}#html" class="btn" style="background-color: #8C2711; color: #FFFFFF;">Voir plus</a>
                            </div>
                        </div>
                        <div class="card-footer bg-transparent">
                            <small class="text-muted">Par DAK-SHADOW</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 course-card">
                        <img src="{{ asset("images/css.png") }}" 
                             class="card-img-top rounded-circle mx-auto mt-3" 
                             style="width: 100px; height: 100px; object-fit: cover;" 
                             alt="Photo du mentor">
                        <div class="card-body">
                            <h5 class="card-title">Utilisation du CSS</h5>
                            <p class="card-text text-muted">Ce cours vous montre comment utiliser le CSS dans vos code HTML5</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span style="color: #8C2711;">Programmation</span>
                                <a href="{{ route("cours") }}#css" class="btn" style="background-color: #8C2711; color: #FFFFFF;">Voir plus</a>
                            </div>
                        </div>
                        <div class="card-footer bg-transparent">
                            <small class="text-muted">Par DAK-SHADOW</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 course-card">
                        <img src="{{ asset("images/python.png") }}" 
                             class="card-img-top rounded-circle mx-auto mt-3" 
                             style="width: 100px; height: 100px; object-fit: cover;" 
                             alt="Photo du mentor">
                        <div class="card-body">
                            <h5 class="card-title">Programmation en Python</h5>
                            <p class="card-text text-muted">Voici notre cours sur le langage python qui est le langage de preference pour le machine learning</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span style="color: #8C2711;">Programmation</span>
                                <a href="{{ route("cours") }}#python" class="btn" style="background-color: #8C2711; color: #FFFFFF;">Voir plus</a>
                            </div>
                        </div>
                        <div class="card-footer bg-transparent">
                            <small class="text-muted">Par DAK-SHADOW</small>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section Mentors -->
        <section class="mt-5">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1 class="brand-header" style="color: #8C2711">Nos Mentors</h1>
                <a href="#" class="btn" style="background-color: #8C2711; color: #FFFFFF;">Trouver un mentor</a>
            </div>
            
            <div class="row">
                <div class="col-md-3 mb-4">
                    <div class="card h-100 mentor-card text-center">
                        <img src="{{ asset('images/default-profile.png') }}" 
                             class="card-img-top rounded-circle mx-auto mt-3" 
                             style="width: 100px; height: 100px; object-fit: cover;" 
                             alt="Photo du mentor">
                        <div class="card-body">
                            <h5 class="card-title">DAK-SHADOW</h5>
                            <p class="card-text text-muted">Developpeur web et mobile</p>
                            <p class="card-text"><small>2 ans d'experience dans le developpement d'application</small></p>
                            <a href="#" class="btn" style="background-color: #8C2711; color: #FFFFFF;">Voir profil</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card h-100 mentor-card text-center">
                        <img src="{{ asset("images/mentor_1.png") }}" 
                             class="card-img-top rounded-circle mx-auto mt-3" 
                             style="width: 100px; height: 100px; object-fit: cover;" 
                             alt="Photo du mentor">
                        <div class="card-body">
                            <h5 class="card-title">DAK-SHADOW</h5>
                            <p class="card-text text-muted">Developpeur web et mobile</p>
                            <p class="card-text"><small>2 ans d'experience dans le developpement d'application</small></p>
                            <a href="#" class="btn" style="background-color: #8C2711; color: #FFFFFF;">Voir profil</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card h-100 mentor-card text-center">
                        <img src="{{ asset("images/mentor.png") }}" 
                             class="card-img-top rounded-circle mx-auto mt-3" 
                             style="width: 100px; height: 100px; object-fit: cover;" 
                             alt="Photo du mentor">
                        <div class="card-body">
                            <h5 class="card-title">DAK-SHADOW</h5>
                            <p class="card-text text-muted">Developpeur web et mobile</p>
                            <p class="card-text"><small>2 ans d'experience dans le developpement d'application</small></p>
                            <a href="#" class="btn" style="background-color: #8C2711; color: #FFFFFF;">Voir profil</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card h-100 mentor-card text-center">
                        <img src="{{ asset("images/mentor_2.png") }}" 
                             class="card-img-top rounded-circle mx-auto mt-3" 
                             style="width: 100px; height: 100px; object-fit: cover;" 
                             alt="Photo du mentor">
                        <div class="card-body">
                            <h5 class="card-title">DAK-SHADOW</h5>
                            <p class="card-text text-muted">Developpeur web et mobile</p>
                            <p class="card-text"><small>2 ans d'experience dans le developpement d'application</small></p>
                            <a href="#" class="btn" style="background-color: #8C2711; color: #FFFFFF;">Voir profil</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endauth

    <!-- Section Témoignages -->
    <h1 class="brand-header" style="color: #8C2711; margin-top: 40px;">Témoignages</h1>
    <div class="row">
        <div class="col-md-4">
            <div class="card testimonial-card">
                <div class="card-body">
                    <p class="card-text">"Findy m'a aidé à choisir la bonne orientation pour ma carrière. Je suis très satisfait des conseils reçus!"</p>
                    <h5 class="card-title">ABDOUL Khabirou</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card testimonial-card">
                <div class="card-body">
                    <p class="card-text">"L'équipe de Findy est très professionnelle et à l'écoute. Grâce à eux, j'ai trouvé ma voie!"</p>
                    <h5 class="card-title">DAK Abdoul</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card testimonial-card">
                <div class="card-body">
                    <p class="card-text">"Je recommande vivement Findy à tous ceux qui cherchent des conseils en orientation. Un service exceptionnel!"</p>
                    <h5 class="card-title">KHABIROU king</h5>
                </div>
            </div>
        </div>
    </div>

    <!-- Quiz d'orientation -->
    @auth
        <section class="orientation-quiz">
            <div class="quiz-card">
                <h2>Vous ne savez pas par où commencer ?</h2>
                <p>Notre quiz d'orientation vous propose des pistes personnalisées en 5 minutes</p>
                <a href="#}" class="quiz-button">Faire le test <i class="fas fa-arrow-right"></i></a>
            </div>
        </section>
    @else
        <section class="orientation-quiz">
            <div class="quiz-card">
                <h2>Connectez-vous pour accéder à plus de fonctionnalités</h2>
                <p>Créez un compte pour bénéficier de notre quiz d'orientation et de conseils personnalisés</p>
                <div class="d-flex gap-3 justify-content-center">
                    <a href="{{ route('login') }}" class="btn btn-primary">Se connecter</a>
                    <a href="{{ route('register') }}" class="btn btn-outline-primary">S'inscrire</a>
                </div>
            </div>
        </section>
    @endauth

    <!-- Pied de page -->
    <footer class="footer mt-5">
        <div class="container text-center">
            <p>&copy; 2023 Findy. Tous droits réservés.</p>
            <p><a href="#">Contactez-nous</a> | <a href="#">À propos</a></p>
        </div>
    </footer>
</div>
@endsection