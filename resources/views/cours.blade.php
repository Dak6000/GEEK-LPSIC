@extends("navbar.navbar")

@section("contenu")
<div class="container py-4">
    <h1 class="brand-header text-center mb-5" style="color: #8C2711">Nos Cours de Programmation</h1>

    <!-- HTML5 Course -->
    <div class="card mb-5 course-detail-card">
        <div class="row g-0">
            <div class="col-md-4 d-flex align-items-center justify-content-center p-4">
                <img src="{{ asset('images/html.png') }}" class="img-fluid rounded-circle" style="width: 200px; height: 200px; object-fit: cover;" alt="HTML5">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h2 class="card-title" id="html" style="color: #8C2711">Programmation avec HTML5</h2>
                    <p class="card-text"><small class="text-muted">Par DAK-SHADOW</small></p>
                    <p class="card-text lead">Le langage de balisage fondamental pour la création de pages web</p>
                    
                    <div class="course-info mb-4">
                        <span class="badge bg-primary me-2">Débutant</span>
                        <span class="me-3"><i class="far fa-clock me-1"></i> 15 heures</span>
                        <span class="me-3"><i class="fas fa-tasks me-1"></i> 12 leçons</span>
                        <span><i class="fas fa-star me-1 text-warning"></i>4.8/5</span>
                    </div>
                    
                    <h5 class="mt-3">Description du cours :</h5>
                    <p class="card-text">HTML5 est la dernière version du langage HTML, essentiel pour structurer le contenu web. Ce cours couvre :</p>
                    <ul>
                        <li>Les bases du balisage HTML</li>
                        <li>Les nouvelles balises sémantiques (header, footer, section...)</li>
                        <li>Intégration de médias (audio, vidéo)</li>
                        <li>Formulaires avancés</li>
                        <li>Accessibilité web</li>
                    </ul>
                    
                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <a href="#" class="btn" style="background-color: #8C2711; color: #FFFFFF;">Commencer le cours</a>
                        <a href="#" class="text-decoration-none" style="color: #8C2711;">Voir le programme détaillé <i class="fas fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CSS Course -->
    <div class="card mb-5 course-detail-card">
        <div class="row g-0">
            <div class="col-md-4 d-flex align-items-center justify-content-center p-4">
                <img src="{{ asset('images/css.png') }}" class="img-fluid rounded-circle" style="width: 200px; height: 200px; object-fit: cover;" alt="CSS">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h2 class="card-title" id="css" style="color: #8C2711">Maîtrise du CSS Moderne</h2>
                    <p class="card-text"><small class="text-muted">Par DAK-SHADOW</small></p>
                    <p class="card-text lead">Donnez du style à vos pages web avec les dernières fonctionnalités CSS</p>
                    
                    <div class="course-info mb-4">
                        <span class="badge bg-primary me-2">Débutant</span>
                        <span class="me-3"><i class="far fa-clock me-1"></i> 20 heures</span>
                        <span class="me-3"><i class="fas fa-tasks me-1"></i> 18 leçons</span>
                        <span><i class="fas fa-star me-1 text-warning"></i>4.7/5</span>
                    </div>
                    
                    <h5 class="mt-3">Description du cours :</h5>
                    <p class="card-text">Apprenez à créer des designs web modernes et responsives :</p>
                    <ul>
                        <li>Sélecteurs CSS et spécificité</li>
                        <li>Flexbox et Grid Layout</li>
                        <li>Animations et transitions</li>
                        <li>Variables CSS</li>
                        <li>Responsive design (media queries)</li>
                        <li>Préprocesseurs (SASS/SCSS)</li>
                    </ul>
                    
                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <a href="#" class="btn" style="background-color: #8C2711; color: #FFFFFF;">Commencer le cours</a>
                        <a href="#" class="text-decoration-none" style="color: #8C2711;">Voir le programme détaillé <i class="fas fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript Course -->
    <div class="card mb-5 course-detail-card">
        <div class="row g-0">
            <div class="col-md-4 d-flex align-items-center justify-content-center p-4">
                <img src="{{ asset('images/javascript.png') }}" class="img-fluid rounded-circle" style="width: 200px; height: 200px; object-fit: cover;" alt="JavaScript">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h2 class="card-title" id="javascript" style="color: #8C2711">JavaScript Moderne</h2>
                    <p class="card-text"><small class="text-muted">Par DAK-SHADOW</small></p>
                    <p class="card-text lead">Donnez vie à vos pages web avec le langage JavaScript</p>
                    
                    <div class="course-info mb-4">
                        <span class="badge bg-warning me-2">Intermédiaire</span>
                        <span class="me-3"><i class="far fa-clock me-1"></i> 30 heures</span>
                        <span class="me-3"><i class="fas fa-tasks me-1"></i> 25 leçons</span>
                        <span><i class="fas fa-star me-1 text-warning"></i>4.9/5</span>
                    </div>
                    
                    <h5 class="mt-3">Description du cours :</h5>
                    <p class="card-text">Un cours complet sur JavaScript et ses écosystèmes :</p>
                    <ul>
                        <li>Fondamentaux du langage (ES6+)</li>
                        <li>Manipulation du DOM</li>
                        <li>Asynchrone (Promises, async/await)</li>
                        <li>API Fetch et AJAX</li>
                        <li>Introduction à Node.js</li>
                        <li>Frameworks modernes (React, Vue, Angular)</li>
                    </ul>
                    
                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <a href="#" class="btn" style="background-color: #8C2711; color: #FFFFFF;">Commencer le cours</a>
                        <a href="#" class="text-decoration-none" style="color: #8C2711;">Voir le programme détaillé <i class="fas fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Python Course -->
    <div class="card mb-5 course-detail-card">
        <div class="row g-0">
            <div class="col-md-4 d-flex align-items-center justify-content-center p-4">
                <img src="{{ asset('images/python.png') }}" class="img-fluid rounded-circle" style="width: 200px; height: 200px; object-fit: cover;" alt="Python">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h2 class="card-title" id="python" style="color: #8C2711">Python pour Débutants</h2>
                    <p class="card-text"><small class="text-muted">Par DAK-SHADOW</small></p>
                    <p class="card-text lead">Apprenez le langage Python, idéal pour le machine learning et le web</p>
                    
                    <div class="course-info mb-4">
                        <span class="badge bg-primary me-2">Débutant</span>
                        <span class="me-3"><i class="far fa-clock me-1"></i> 25 heures</span>
                        <span class="me-3"><i class="fas fa-tasks me-1"></i> 20 leçons</span>
                        <span><i class="fas fa-star me-1 text-warning"></i>4.8/5</span>
                    </div>
                    
                    <h5 class="mt-3">Description du cours :</h5>
                    <p class="card-text">Un cours complet pour maîtriser Python :</p>
                    <ul>
                        <li>Syntaxe de base et structures de contrôle</li>
                        <li>Fonctions et modules</li>
                        <li>Programmation orientée objet</li>
                        <li>Traitement des fichiers</li>
                        <li>Introduction à Django et Flask</li>
                        <li>Bases de données avec Python</li>
                    </ul>
                    
                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <a href="#" class="btn" style="background-color: #8C2711; color: #FFFFFF;">Commencer le cours</a>
                        <a href="#" class="text-decoration-none" style="color: #8C2711;">Voir le programme détaillé <i class="fas fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- PHP Course -->
    <div class="card mb-5 course-detail-card">
        <div class="row g-0">
            <div class="col-md-4 d-flex align-items-center justify-content-center p-4">
                <img src="{{ asset('images/php.png') }}" class="img-fluid rounded-circle" style="width: 200px; height: 200px; object-fit: cover;" alt="PHP">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h2 class="card-title" id="php" style="color: #8C2711">PHP Moderne</h2>
                    <p class="card-text"><small class="text-muted">Par DAK-SHADOW</small></p>
                    <p class="card-text lead">Développez des applications web dynamiques avec PHP</p>
                    
                    <div class="course-info mb-4">
                        <span class="badge bg-warning me-2">Intermédiaire</span>
                        <span class="me-3"><i class="far fa-clock me-1"></i> 28 heures</span>
                        <span class="me-3"><i class="fas fa-tasks me-1"></i> 22 leçons</span>
                        <span><i class="fas fa-star me-1 text-warning"></i>4.6/5</span>
                    </div>
                    
                    <h5 class="mt-3">Description du cours :</h5>
                    <p class="card-text">Maîtrisez PHP pour le développement backend :</p>
                    <ul>
                        <li>Fondamentaux de PHP 8+</li>
                        <li>Programmation orientée objet</li>
                        <li>Interaction avec MySQL</li>
                        <li>Création d'API REST</li>
                        <li>Sécurité des applications PHP</li>
                        <li>Intégration avec Laravel</li>
                    </ul>
                    
                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <a href="#" class="btn" style="background-color: #8C2711; color: #FFFFFF;">Commencer le cours</a>
                        <a href="#" class="text-decoration-none" style="color: #8C2711;">Voir le programme détaillé <i class="fas fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .course-detail-card {
        border: none;
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }
    
    .course-detail-card:hover {
        transform: translateY(-5px);
    }
    
    .course-info {
        background-color: #f8f9fa;
        padding: 10px 15px;
        border-radius: 8px;
    }
    
    .badge.bg-primary {
        background-color: #8C2711 !important;
    }
    
    .badge.bg-warning {
        background-color: #BF5B21 !important;
        color: white;
    }

    li {
        list-style-type: none;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Vérifie si une ancre est présente dans l'URL
        if (window.location.hash) {
            const target = document.querySelector(window.location.hash);
            if (target) {
                setTimeout(() => {
                    target.scrollIntoView({ behavior: 'smooth' });
                    
                }, 100);
            }
        }
    });
</script>

@endsection