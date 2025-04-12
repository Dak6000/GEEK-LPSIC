@extends("navbar.navbar")

@section("contenu")
<div class="container py-4">
    <h1 class="brand-header text-center mb-5" style="color: #8C2711">Nos Mentors Expérimentés</h1>

    <!-- Mentor 1 -->
    <div id="dak-shadow" class="card mb-5 mentor-detail-card">
        <div class="row g-0">
            <div class="col-md-3 d-flex flex-column align-items-center p-4">
                <img src="{{ asset('images/default-profile.png') }}" 
                     class="img-fluid rounded-circle mb-3" 
                     style="width: 150px; height: 150px; object-fit: cover;" 
                     alt="DAK-SHADOW">
                <div class="text-center">
                    <h4>DAK-SHADOW</h4>
                    <p class="text-muted">Développeur Full Stack</p>
                    <div class="rating mb-2">
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star-half-alt text-warning"></i>
                        <span class="ms-1">4.7/5</span>
                    </div>
                    <a href="#" class="btn btn-sm mt-2" style="background-color: #8C2711; color: #FFFFFF;">
                        <i class="fas fa-envelope me-1"></i> Contacter
                    </a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <h2 class="card-title" style="color: #8C2711">Profil Professionnel</h2>
                            <p class="card-text"><small class="text-muted">Mentor depuis 2021</small></p>
                        </div>
                        <span class="badge bg-primary">Disponible</span>
                    </div>
                    
                    <div class="mentor-info mb-4">
                        <div class="row">
                            <div class="col-md-6">
                                <p><i class="fas fa-briefcase me-2" style="color: #8C2711"></i> <strong>Spécialités :</strong></p>
                                <ul>
                                    <li>Développement Web (Laravel, Vue.js)</li>
                                    <li>Applications Mobile (Flutter)</li>
                                    <li>Base de données (MySQL, MongoDB)</li>
                                    <li>DevOps (Docker, AWS)</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <p><i class="fas fa-graduation-cap me-2" style="color: #8C2711"></i> <strong>Expérience :</strong></p>
                                <ul>
                                    <li>2 ans en développement web professionnel</li>
                                    <li>5 projets clients réalisés</li>
                                    <li>Formation de 10+ développeurs juniors</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <h5 class="mt-3"><i class="fas fa-user-graduate me-2" style="color: #8C2711"></i> Approche Mentoring</h5>
                    <p class="card-text">Mon approche est axée sur l'apprentissage pratique avec des projets concrets. Je crois en :</p>
                    <ul>
                        <li>Un suivi personnalisé selon votre niveau</li>
                        <li>Des sessions de code en direct</li>
                        <li>Des revues de code constructives</li>
                        <li>Une orientation vers les bonnes pratiques</li>
                    </ul>
                    
                    <h5 class="mt-4"><i class="fas fa-calendar-alt me-2" style="color: #8C2711"></i> Disponibilités</h5>
                    <div class="availability">
                        <span class="badge bg-light text-dark me-2 mb-2">Lun 18h-20h</span>
                        <span class="badge bg-light text-dark me-2 mb-2">Mer 14h-16h</span>
                        <span class="badge bg-light text-dark me-2 mb-2">Ven 10h-12h</span>
                        <span class="badge bg-light text-dark me-2 mb-2">Sam 09h-11h</span>
                    </div>
                    
                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <a href="#" class="btn" style="background-color: #8C2711; color: #FFFFFF;">
                            <i class="fas fa-comments me-1"></i> Demander une session
                        </a>
                        <a href="#" class="text-decoration-none" style="color: #8C2711;">
                            Voir les avis <i class="fas fa-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mentor 2 -->
    <div id="mentor-1" class="card mb-5 mentor-detail-card">
        <div class="row g-0">
            <div class="col-md-3 d-flex flex-column align-items-center p-4">
                <img src="{{ asset('images/mentor_1.png') }}" 
                     class="img-fluid rounded-circle mb-3" 
                     style="width: 150px; height: 150px; object-fit: cover;" 
                     alt="Sophie Martin">
                <div class="text-center">
                    <h4>Sophie Martin</h4>
                    <p class="text-muted">Expert JavaScript/Node.js</p>
                    <div class="rating mb-2">
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <span class="ms-1">5/5</span>
                    </div>
                    <a href="#" class="btn btn-sm mt-2" style="background-color: #8C2711; color: #FFFFFF;">
                        <i class="fas fa-envelope me-1"></i> Contacter
                    </a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <h2 class="card-title" style="color: #8C2711">Profil Professionnel</h2>
                            <p class="card-text"><small class="text-muted">Mentor depuis 2019</small></p>
                        </div>
                        <span class="badge bg-primary">Disponible</span>
                    </div>
                    
                    <div class="mentor-info mb-4">
                        <div class="row">
                            <div class="col-md-6">
                                <p><i class="fas fa-briefcase me-2" style="color: #8C2711"></i> <strong>Spécialités :</strong></p>
                                <ul>
                                    <li>JavaScript Avancé (ES6+)</li>
                                    <li>Node.js et Express</li>
                                    <li>React/Redux</li>
                                    <li>TypeScript</li>
                                    <li>GraphQL</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <p><i class="fas fa-graduation-cap me-2" style="color: #8C2711"></i> <strong>Expérience :</strong></p>
                                <ul>
                                    <li>5 ans en développement JavaScript</li>
                                    <li>Lead Developer chez TechCorp</li>
                                    <li>Contributrice Open Source</li>
                                    <li>Formatrice certifiée</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <h5 class="mt-3"><i class="fas fa-user-graduate me-2" style="color: #8C2711"></i> Approche Mentoring</h5>
                    <p class="card-text">Mon mentoring est axé sur les bonnes pratiques et l'excellence technique :</p>
                    <ul>
                        <li>Revue de code approfondie</li>
                        <li>Résolution de problèmes complexes</li>
                        <li>Architecture d'applications modernes</li>
                        <li>Optimisation des performances</li>
                    </ul>
                    
                    <h5 class="mt-4"><i class="fas fa-calendar-alt me-2" style="color: #8C2711"></i> Disponibilités</h5>
                    <div class="availability">
                        <span class="badge bg-light text-dark me-2 mb-2">Mar 16h-19h</span>
                        <span class="badge bg-light text-dark me-2 mb-2">Jeu 10h-12h</span>
                        <span class="badge bg-light text-dark me-2 mb-2">Sam 14h-17h</span>
                    </div>
                    
                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <a href="#" class="btn" style="background-color: #8C2711; color: #FFFFFF;">
                            <i class="fas fa-comments me-1"></i> Demander une session
                        </a>
                        <a href="#" class="text-decoration-none" style="color: #8C2711;">
                            Voir les avis <i class="fas fa-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mentor 3 -->
    <div id="mentor-2" class="card mb-5 mentor-detail-card">
        <div class="row g-0">
            <div class="col-md-3 d-flex flex-column align-items-center p-4">
                <img src="{{ asset('images/mentor.png') }}" 
                     class="img-fluid rounded-circle mb-3" 
                     style="width: 150px; height: 150px; object-fit: cover;" 
                     alt="Thomas Dupont">
                <div class="text-center">
                    <h4>Thomas Dupont</h4>
                    <p class="text-muted">Data Scientist Senior</p>
                    <div class="rating mb-2">
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="far fa-star text-warning"></i>
                        <span class="ms-1">4.2/5</span>
                    </div>
                    <a href="#" class="btn btn-sm mt-2" style="background-color: #8C2711; color: #FFFFFF;">
                        <i class="fas fa-envelope me-1"></i> Contacter
                    </a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <h2 class="card-title" style="color: #8C2711">Profil Professionnel</h2>
                            <p class="card-text"><small class="text-muted">Mentor depuis 2020</small></p>
                        </div>
                        <span class="badge bg-primary">Disponible</span>
                    </div>
                    
                    <div class="mentor-info mb-4">
                        <div class="row">
                            <div class="col-md-6">
                                <p><i class="fas fa-briefcase me-2" style="color: #8C2711"></i> <strong>Spécialités :</strong></p>
                                <ul>
                                    <li>Python Avancé</li>
                                    <li>Machine Learning</li>
                                    <li>Pandas/Numpy</li>
                                    <li>TensorFlow/PyTorch</li>
                                    <li>Visualisation de données</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <p><i class="fas fa-graduation-cap me-2" style="color: #8C2711"></i> <strong>Expérience :</strong></p>
                                <ul>
                                    <li>PhD en Intelligence Artificielle</li>
                                    <li>4 ans chez DataInnov</li>
                                    <li>Enseignant à l'université</li>
                                    <li>3 publications scientifiques</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <h5 class="mt-3"><i class="fas fa-user-graduate me-2" style="color: #8C2711"></i> Approche Mentoring</h5>
                    <p class="card-text">Je me concentre sur l'apprentissage pratique :</p>
                    <ul>
                        <li>Projets concrets de data science</li>
                        <li>Analyse de datasets réels</li>
                        <li>Optimisation de modèles</li>
                        <li>Préparation aux entretiens techniques</li>
                    </ul>
                    
                    <h5 class="mt-4"><i class="fas fa-calendar-alt me-2" style="color: #8C2711"></i> Disponibilités</h5>
                    <div class="availability">
                        <span class="badge bg-light text-dark me-2 mb-2">Lun 19h-21h</span>
                        <span class="badge bg-light text-dark me-2 mb-2">Mer 09h-12h</span>
                        <span class="badge bg-light text-dark me-2 mb-2">Ven 14h-17h</span>
                    </div>
                    
                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <a href="#" class="btn" style="background-color: #8C2711; color: #FFFFFF;">
                            <i class="fas fa-comments me-1"></i> Demander une session
                        </a>
                        <a href="#" class="text-decoration-none" style="color: #8C2711;">
                            Voir les avis <i class="fas fa-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mentor 4 -->
    <div id="mentor-3" class="card mb-5 mentor-detail-card">
        <div class="row g-0">
            <div class="col-md-3 d-flex flex-column align-items-center p-4">
                <img src="{{ asset('images/mentor_2.png') }}" 
                     class="img-fluid rounded-circle mb-3" 
                     style="width: 150px; height: 150px; object-fit: cover;" 
                     alt="Émilie Rousseau">
                <div class="text-center">
                    <h4>Émilie Rousseau</h4>
                    <p class="text-muted">Développeuse Mobile Senior</p>
                    <div class="rating mb-2">
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star-half-alt text-warning"></i>
                        <span class="ms-1">4.5/5</span>
                    </div>
                    <a href="#" class="btn btn-sm mt-2" style="background-color: #8C2711; color: #FFFFFF;">
                        <i class="fas fa-envelope me-1"></i> Contacter
                    </a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <h2 class="card-title" style="color: #8C2711">Profil Professionnel</h2>
                            <p class="card-text"><small class="text-muted">Mentor depuis 2018</small></p>
                        </div>
                        <span class="badge bg-primary">Disponible</span>
                    </div>
                    
                    <div class="mentor-info mb-4">
                        <div class="row">
                            <div class="col-md-6">
                                <p><i class="fas fa-briefcase me-2" style="color: #8C2711"></i> <strong>Spécialités :</strong></p>
                                <ul>
                                    <li>Flutter/Dart</li>
                                    <li>React Native</li>
                                    <li>iOS (Swift)</li>
                                    <li>Android (Kotlin)</li>
                                    <li>CI/CD Mobile</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <p><i class="fas fa-graduation-cap me-2" style="color: #8C2711"></i> <strong>Expérience :</strong></p>
                                <ul>
                                    <li>6 ans en développement mobile</li>
                                    <li>15+ applications publiées</li>
                                    <li>CTO chez MobileDev Inc</li>
                                    <li>Conférencière internationale</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <h5 class="mt-3"><i class="fas fa-user-graduate me-2" style="color: #8C2711"></i> Approche Mentoring</h5>
                    <p class="card-text">Je propose un accompagnement complet :</p>
                    <ul>
                        <li>De l'initiation aux concepts avancés</li>
                        <li>Architecture d'applications mobiles</li>
                        <li>Publication sur les stores</li>
                        <li>Monétisation d'applications</li>
                    </ul>
                    
                    <h5 class="mt-4"><i class="fas fa-calendar-alt me-2" style="color: #8C2711"></i> Disponibilités</h5>
                    <div class="availability">
                        <span class="badge bg-light text-dark me-2 mb-2">Mar 14h-18h</span>
                        <span class="badge bg-light text-dark me-2 mb-2">Jeu 09h-12h</span>
                        <span class="badge bg-light text-dark me-2 mb-2">Ven 16h-20h</span>
                    </div>
                    
                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <a href="#" class="btn" style="background-color: #8C2711; color: #FFFFFF;">
                            <i class="fas fa-comments me-1"></i> Demander une session
                        </a>
                        <a href="#" class="text-decoration-none" style="color: #8C2711;">
                            Voir les avis <i class="fas fa-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .mentor-detail-card {
        border: none;
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }
    
    .mentor-detail-card:hover {
        transform: translateY(-5px);
    }
    
    .mentor-info {
        background-color: #f8f9fa;
        padding: 15px;
        border-radius: 8px;
    }
    
    .rating {
        font-size: 0.9rem;
    }
    
    .availability .badge {
        border: 1px solid #dee2e6;
    }
    
    .badge.bg-primary {
        background-color: #8C2711 !important;
    }

    li {
        list-style-type: none;
    }
</style>

<script>
// Script pour gérer l'affichage d'un seul mentor si on arrive avec une ancre
document.addEventListener('DOMContentLoaded', function() {
    if (window.location.hash) {
        const mentorId = window.location.hash.substring(1);
        const mentorSections = document.querySelectorAll('.mentor-detail-card');
        
        mentorSections.forEach(section => {
            if (section.id !== mentorId) {
                section.style.display = 'none';
            } else {
                // Scroll vers la section après un léger délai
                setTimeout(() => {
                    section.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }, 100);
            }
        });
    }
});
</script>
@endsection