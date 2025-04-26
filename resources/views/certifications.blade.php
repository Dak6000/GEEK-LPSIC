@extends("navbar.navbar")

@section("contenu")
<div class="container py-4">
    <h1 class="brand-header text-center mb-5" style="color: #8C2711">Certifications</h1>

    <!-- Filtres -->
    <div class="row mb-4">
        <div class="col-md-6">
            <select class="form-select" id="domainFilter">
                <option value="">Tous les domaines</option>
                <option value="web">Développement Web</option>
                <option value="mobile">Développement Mobile</option>
                <option value="data">Data Science</option>
                <option value="devops">DevOps</option>
            </select>
        </div>
        <div class="col-md-6">
            <select class="form-select" id="levelFilter">
                <option value="">Tous les niveaux</option>
                <option value="debutant">Débutant</option>
                <option value="intermediaire">Intermédiaire</option>
                <option value="avance">Avancé</option>
            </select>
        </div>
    </div>

    <!-- Certifications -->
    <div class="row">
        <!-- Certification Web Débutant -->
        <div class="col-md-4 mb-4" data-domain="web" data-level="debutant">
            <div class="card h-100 certification-card">
                <div class="card-body">
                    <h5 class="card-title" style="color: #8C2711">HTML/CSS Fondamentaux</h5>
                    <span class="badge bg-primary mb-2">Débutant</span>
                    <span class="badge bg-info mb-2">Web</span>
                    <p class="card-text">Maîtrisez les bases du développement web avec HTML5 et CSS3.</p>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-clock me-2"></i>Durée: 2 heures</li>
                        <li><i class="fas fa-tasks me-2"></i>40 questions</li>
                        <li><i class="fas fa-certificate me-2"></i>Score minimum: 70%</li>
                    </ul>
                    <a href="#" class="btn w-100" style="background-color: #8C2711; color: #FFFFFF;">
                        Commencer la certification
                    </a>
                </div>
            </div>
        </div>

        <!-- Certification Web Intermédiaire -->
        <div class="col-md-4 mb-4" data-domain="web" data-level="intermediaire">
            <div class="card h-100 certification-card">
                <div class="card-body">
                    <h5 class="card-title" style="color: #8C2711">JavaScript Avancé</h5>
                    <span class="badge bg-warning mb-2">Intermédiaire</span>
                    <span class="badge bg-info mb-2">Web</span>
                    <p class="card-text">Approfondissez vos connaissances en JavaScript moderne.</p>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-clock me-2"></i>Durée: 3 heures</li>
                        <li><i class="fas fa-tasks me-2"></i>60 questions</li>
                        <li><i class="fas fa-certificate me-2"></i>Score minimum: 75%</li>
                    </ul>
                    <a href="#" class="btn w-100" style="background-color: #8C2711; color: #FFFFFF;">
                        Commencer la certification
                    </a>
                </div>
            </div>
        </div>

        <!-- Certification Mobile -->
        <div class="col-md-4 mb-4" data-domain="mobile" data-level="avance">
            <div class="card h-100 certification-card">
                <div class="card-body">
                    <h5 class="card-title" style="color: #8C2711">Flutter Expert</h5>
                    <span class="badge bg-danger mb-2">Avancé</span>
                    <span class="badge bg-success mb-2">Mobile</span>
                    <p class="card-text">Devenez un expert en développement d'applications Flutter.</p>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-clock me-2"></i>Durée: 4 heures</li>
                        <li><i class="fas fa-tasks me-2"></i>80 questions</li>
                        <li><i class="fas fa-certificate me-2"></i>Score minimum: 80%</li>
                    </ul>
                    <a href="#" class="btn w-100" style="background-color: #8C2711; color: #FFFFFF;">
                        Commencer la certification
                    </a>
                </div>
            </div>
        </div>

        <!-- Certification Data Science -->
        <div class="col-md-4 mb-4" data-domain="data" data-level="intermediaire">
            <div class="card h-100 certification-card">
                <div class="card-body">
                    <h5 class="card-title" style="color: #8C2711">Python pour Data Science</h5>
                    <span class="badge bg-warning mb-2">Intermédiaire</span>
                    <span class="badge bg-primary mb-2">Data</span>
                    <p class="card-text">Maîtrisez Python pour l'analyse de données et le machine learning.</p>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-clock me-2"></i>Durée: 3.5 heures</li>
                        <li><i class="fas fa-tasks me-2"></i>70 questions</li>
                        <li><i class="fas fa-certificate me-2"></i>Score minimum: 75%</li>
                    </ul>
                    <a href="#" class="btn w-100" style="background-color: #8C2711; color: #FFFFFF;">
                        Commencer la certification
                    </a>
                </div>
            </div>
        </div>

        <!-- Certification DevOps -->
        <div class="col-md-4 mb-4" data-domain="devops" data-level="avance">
            <div class="card h-100 certification-card">
                <div class="card-body">
                    <h5 class="card-title" style="color: #8C2711">DevOps Avancé</h5>
                    <span class="badge bg-danger mb-2">Avancé</span>
                    <span class="badge bg-secondary mb-2">DevOps</span>
                    <p class="card-text">Maîtrisez les outils et pratiques DevOps modernes.</p>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-clock me-2"></i>Durée: 4 heures</li>
                        <li><i class="fas fa-tasks me-2"></i>75 questions</li>
                        <li><i class="fas fa-certificate me-2"></i>Score minimum: 80%</li>
                    </ul>
                    <a href="#" class="btn w-100" style="background-color: #8C2711; color: #FFFFFF;">
                        Commencer la certification
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .certification-card {
        border: none;
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }
    
    .certification-card:hover {
        transform: translateY(-5px);
    }
    
    .badge {
        font-size: 0.8rem;
        padding: 0.5em 0.8em;
    }
    
    .badge.bg-primary {
        background-color: #8C2711 !important;
    }
    
    .list-unstyled li {
        margin-bottom: 0.5rem;
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const domainFilter = document.getElementById('domainFilter');
    const levelFilter = document.getElementById('levelFilter');
    const certificationCards = document.querySelectorAll('.col-md-4');

    function filterCertifications() {
        const selectedDomain = domainFilter.value;
        const selectedLevel = levelFilter.value;

        certificationCards.forEach(card => {
            const cardDomain = card.dataset.domain;
            const cardLevel = card.dataset.level;

            const domainMatch = !selectedDomain || cardDomain === selectedDomain;
            const levelMatch = !selectedLevel || cardLevel === selectedLevel;

            card.style.display = domainMatch && levelMatch ? 'block' : 'none';
        });
    }

    domainFilter.addEventListener('change', filterCertifications);
    levelFilter.addEventListener('change', filterCertifications);
});
</script>
@endsection 