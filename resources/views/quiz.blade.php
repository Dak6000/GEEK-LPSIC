@extends("navbar.navbar")

@section("contenu")
<div class="container py-4">
    <h1 class="brand-header text-center mb-5" style="color: #8C2711">Nos Quiz d'Orientation</h1>
    <p class="text-center mb-5">Testez vos connaissances et découvrez les parcours qui vous correspondent le mieux</p>

    <!-- Quiz BEPC -->
    <div class="quiz-level-section mb-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="level-title" style="color: #BF5B21">
                <i class="fas fa-graduation-cap me-2"></i>Niveau BEPC
            </h2>
            <a href="{{ route('quiz') }}" class="btn btn-sm" style="background-color: #8C2711; color: #FFFFFF;">Passer le quiz</a>
        </div>
        
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card h-100 quiz-card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start">
                            <h5 class="card-title">Quiz Métiers Manuels</h5>
                            <span class="badge bg-primary">15 questions</span>
                        </div>
                        <p class="card-text text-muted">Découvrez les métiers artisanaux qui pourraient vous correspondre</p>
                        <div class="quiz-meta">
                            <span><i class="far fa-clock me-1"></i> 10 min</span>
                            <span class="ms-3"><i class="fas fa-users me-1"></i> 245 participants</span>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent">
                        <a href="#" class="btn w-100" style="background-color: #8C2711; color: #FFFFFF;">Commencer</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="card h-100 quiz-card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start">
                            <h5 class="card-title">Quiz Orientation CAP</h5>
                            <span class="badge bg-primary">20 questions</span>
                        </div>
                        <p class="card-text text-muted">Trouvez la formation CAP la plus adaptée à votre profil</p>
                        <div class="quiz-meta">
                            <span><i class="far fa-clock me-1"></i> 15 min</span>
                            <span class="ms-3"><i class="fas fa-users me-1"></i> 189 participants</span>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent">
                        <a href="#" class="btn w-100" style="background-color: #8C2711; color: #FFFFFF;">Commencer</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="card h-100 quiz-card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start">
                            <h5 class="card-title">Quiz Secteurs Professionnels</h5>
                            <span class="badge bg-primary">12 questions</span>
                        </div>
                        <p class="card-text text-muted">Identifiez les secteurs d'activité qui correspondent à vos intérêts</p>
                        <div class="quiz-meta">
                            <span><i class="far fa-clock me-1"></i> 8 min</span>
                            <span class="ms-3"><i class="fas fa-users me-1"></i> 312 participants</span>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent">
                        <a href="#" class="btn w-100" style="background-color: #8C2711; color: #FFFFFF;">Commencer</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Quiz BAC -->
    <div class="quiz-level-section mb-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="level-title" style="color: #BF5B21">
                <i class="fas fa-university me-2"></i>Niveau BAC
            </h2>
            <a href="#" class="btn btn-sm" style="background-color: #8C2711; color: #FFFFFF;">Voir tout</a>
        </div>
        
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card h-100 quiz-card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start">
                            <h5 class="card-title">Quiz Filières Universitaires</h5>
                            <span class="badge bg-primary">18 questions</span>
                        </div>
                        <p class="card-text text-muted">Quelle licence est faite pour vous ? Découvrez-le en 10 minutes</p>
                        <div class="quiz-meta">
                            <span><i class="far fa-clock me-1"></i> 12 min</span>
                            <span class="ms-3"><i class="fas fa-users me-1"></i> 421 participants</span>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent">
                        <a href="#" class="btn w-100" style="background-color: #8C2711; color: #FFFFFF;">Commencer</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="card h-100 quiz-card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start">
                            <h5 class="card-title">Quiz BTS/DUT</h5>
                            <span class="badge bg-primary">22 questions</span>
                        </div>
                        <p class="card-text text-muted">Trouvez la formation courte qui correspond à vos aspirations</p>
                        <div class="quiz-meta">
                            <span><i class="far fa-clock me-1"></i> 15 min</span>
                            <span class="ms-3"><i class="fas fa-users me-1"></i> 356 participants</span>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent">
                        <a href="#" class="btn w-100" style="background-color: #8C2711; color: #FFFFFF;">Commencer</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="card h-100 quiz-card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start">
                            <h5 class="card-title">Quiz Écoles Spécialisées</h5>
                            <span class="badge bg-primary">15 questions</span>
                        </div>
                        <p class="card-text text-muted">Découvrez les écoles qui pourraient vous intéresser</p>
                        <div class="quiz-meta">
                            <span><i class="far fa-clock me-1"></i> 10 min</span>
                            <span class="ms-3"><i class="fas fa-users me-1"></i> 278 participants</span>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent">
                        <a href="#" class="btn w-100" style="background-color: #8C2711; color: #FFFFFF;">Commencer</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Quiz Licence -->
    <div class="quiz-level-section mb-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="level-title" style="color: #BF5B21">
                <i class="fas fa-book-open me-2"></i>Niveau Licence
            </h2>
            <a href="#" class="btn btn-sm" style="background-color: #8C2711; color: #FFFFFF;">Voir tout</a>
        </div>
        
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card h-100 quiz-card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start">
                            <h5 class="card-title">Quiz Masters Universitaires</h5>
                            <span class="badge bg-primary">25 questions</span>
                        </div>
                        <p class="card-text text-muted">Quel master choisir après votre licence ?</p>
                        <div class="quiz-meta">
                            <span><i class="far fa-clock me-1"></i> 20 min</span>
                            <span class="ms-3"><i class="fas fa-users me-1"></i> 198 participants</span>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent">
                        <a href="#" class="btn w-100" style="background-color: #8C2711; color: #FFFFFF;">Commencer</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="card h-100 quiz-card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start">
                            <h5 class="card-title">Quiz Écoles de Commerce</h5>
                            <span class="badge bg-primary">20 questions</span>
                        </div>
                        <p class="card-text text-muted">Testez votre adéquation avec les écoles de commerce</p>
                        <div class="quiz-meta">
                            <span><i class="far fa-clock me-1"></i> 15 min</span>
                            <span class="ms-3"><i class="fas fa-users me-1"></i> 156 participants</span>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent">
                        <a href="#" class="btn w-100" style="background-color: #8C2711; color: #FFFFFF;">Commencer</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="card h-100 quiz-card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start">
                            <h5 class="card-title">Quiz Insertion Professionnelle</h5>
                            <span class="badge bg-primary">18 questions</span>
                        </div>
                        <p class="card-text text-muted">Quels métiers sont accessibles avec votre licence ?</p>
                        <div class="quiz-meta">
                            <span><i class="far fa-clock me-1"></i> 12 min</span>
                            <span class="ms-3"><i class="fas fa-users me-1"></i> 231 participants</span>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent">
                        <a href="#" class="btn w-100" style="background-color: #8C2711; color: #FFFFFF;">Commencer</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Quiz Master/Doctorat -->
    <div class="quiz-level-section">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="level-title" style="color: #BF5B21">
                <i class="fas fa-user-graduate me-2"></i>Niveau Master/Doctorat
            </h2>
            <a href="#" class="btn btn-sm" style="background-color: #8C2711; color: #FFFFFF;">Voir tout</a>
        </div>
        
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card h-100 quiz-card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start">
                            <h5 class="card-title">Quiz Carrière Académique</h5>
                            <span class="badge bg-primary">30 questions</span>
                        </div>
                        <p class="card-text text-muted">Êtes-vous fait pour une carrière dans la recherche ?</p>
                        <div class="quiz-meta">
                            <span><i class="far fa-clock me-1"></i> 25 min</span>
                            <span class="ms-3"><i class="fas fa-users me-1"></i> 87 participants</span>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent">
                        <a href="#" class="btn w-100" style="background-color: #8C2711; color: #FFFFFF;">Commencer</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="card h-100 quiz-card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start">
                            <h5 class="card-title">Quiz Secteur Privé</h5>
                            <span class="badge bg-primary">20 questions</span>
                        </div>
                        <p class="card-text text-muted">Quels postes en entreprise correspondent à votre profil ?</p>
                        <div class="quiz-meta">
                            <span><i class="far fa-clock me-1"></i> 15 min</span>
                            <span class="ms-3"><i class="fas fa-users me-1"></i> 124 participants</span>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent">
                        <a href="#" class="btn w-100" style="background-color: #8C2711; color: #FFFFFF;">Commencer</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="card h-100 quiz-card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start">
                            <h5 class="card-title">Quiz Entrepreneuriat</h5>
                            <span class="badge bg-primary">25 questions</span>
                        </div>
                        <p class="card-text text-muted">Testez votre potentiel pour créer votre entreprise</p>
                        <div class="quiz-meta">
                            <span><i class="far fa-clock me-1"></i> 20 min</span>
                            <span class="ms-3"><i class="fas fa-users me-1"></i> 92 participants</span>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent">
                        <a href="#" class="btn w-100" style="background-color: #8C2711; color: #FFFFFF;">Commencer</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .quiz-level-section {
        background-color: #f9f9f9;
        padding: 25px;
        border-radius: 15px;
        margin-bottom: 30px;
    }
    
    .level-title {
        font-size: 1.5rem;
        font-weight: 600;
    }
    
    .quiz-card {
        background: #f9f9f9;
        border: none;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
        transition: transform 0.3s ease;
    }
    
    .quiz-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
    }
    
    .quiz-meta {
        color: #090b0e;
        font-size: 0.9rem;
    }
    
    .badge.bg-primary {
        background-color: #8C2711 !important;
    }
</style>
@endsection