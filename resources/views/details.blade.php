@extends("navbar.navbar")

@section("contenu")
<div class="container">
    <h1 class="brand-header" style="color: #8C2711">Plus de détails</h1>
    
    <section id="bepc" class="diploma-section">
        <div class="section-header">
            <h2 class="section-title">Orientation après le BEPC</h2>
            <div class="section-icon"><i class="fas fa-graduation-cap"></i></div>
        </div>
        <div class="section-content">
            <div class="row">
                <div class="col-md-6">
                    <h3>Voies possibles :</h3>
                    <ul class="path-list">
                        <li><strong>CAP (Certificat d'Aptitude Professionnelle)</strong> - Formation professionnelle en 2 ans</li>
                        <li><strong>BEP (Brevet d'Études Professionnelles)</strong> - Diplôme intermédiaire</li>
                        <li><strong>Apprentissage</strong> - Alternance école/entreprise</li>
                        <li><strong>Seconde professionnelle</strong> - Préparation à un bac pro</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h3>Métiers accessibles :</h3>
                    <div class="row">
                        <div class="col-6">
                            <ul class="job-list">
                                <li>Électricien</li>
                                <li>Plombier</li>
                                <li>Menuisier</li>
                                <li>Mécanicien auto</li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul class="job-list">
                                <li>Cuisinier</li>
                                <li>Coiffeur</li>
                                <li>Esthéticien</li>
                                <li>Assistant maternel</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="resources mt-4">
                <h3>Ressources utiles :</h3>
                <div class="resource-cards">
                    <a href="#" class="resource-card">
                        <i class="fas fa-book"></i> Liste des CAP par secteur
                    </a>
                    <a href="#" class="resource-card">
                        <i class="fas fa-map-marker-alt"></i> CFA près de chez vous
                    </a>
                    <a href="#" class="resource-card">
                        <i class="fas fa-video"></i> Témoignages métiers
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Section BAC -->
    <section id="bac" class="diploma-section">
        <div class="section-header">
            <h2 class="section-title">Orientation après le BAC</h2>
            <div class="section-icon"><i class="fas fa-university"></i></div>
        </div>
        <div class="section-content">
            <div class="row">
                <div class="col-md-6">
                    <h3>Voies universitaires :</h3>
                    <ul class="path-list">
                        <li><strong>Licence générale</strong> (3 ans) - Domaines variés</li>
                        <li><strong>BUT (Bachelor Universitaire de Technologie)</strong> - En IUT</li>
                        <li><strong>PACES</strong> - Première année commune aux études de santé</li>
                        <li><strong>CPGE</strong> - Classes préparatoires aux grandes écoles</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h3>Formations professionnelles :</h3>
                    <ul class="path-list">
                        <li><strong>BTS (Brevet de Technicien Supérieur)</strong> - En lycée ou CFA</li>
                        <li><strong>Écoles spécialisées</strong> (infirmier, social, art...)</li>
                        <li><strong>Écoles de commerce/ingénieurs</strong> - Certaines post-bac</li>
                    </ul>
                </div>
            </div>
            <div class="resources mt-4">
                <h3>Ressources utiles :</h3>
                <div class="resource-cards">
                    <a href="#" class="resource-card">
                        <i class="fas fa-book"></i> Liste des Licences par secteur
                    </a>
                    <a href="#" class="resource-card">
                        <i class="fas fa-map-marker-alt"></i> CFA près de chez vous
                    </a>
                    <a href="#" class="resource-card">
                        <i class="fas fa-video"></i> Témoignages métiers
                    </a>
                </div>
            </div>
            <div class="advice-box">
                <h4><i class="fas fa-lightbulb"></i> Notre conseil :</h4>
                <p>Choisissez en fonction de votre projet professionnel et de votre mode d'apprentissage préféré (théorique, pratique, en alternance...)</p>
            </div>
        </div>
    </section>

    <!-- Section BTS -->
    <section id="bts" class="diploma-section">
        <div class="section-header">
            <h2 class="section-title">Orientation après un BTS</h2>
            <div class="section-icon"><i class="fas fa-briefcase"></i></div>
        </div>
        <div class="section-content">
            <div class="row">
                <div class="col-md-6">
                    <h3><i class="fas fa-building"></i> Vie active</h3>
                    <p>Entrée directe dans le monde professionnel avec des postes de technicien supérieur</p>
                    <ul>
                        <li>Assistant manager</li>
                        <li>Technicien réseau</li>
                        <li>Comptable</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h3><i class="fas fa-graduation-cap"></i> Poursuite d'études</h3>
                    <ul>
                        <li><strong>Licence professionnelle</strong> (1 an)</li>
                        <li><strong>École de commerce/ingénieurs</strong> via admissions parallèles</li>
                        <li><strong>Bachelor</strong> en 1 an</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <h4>Statistiques :</h4>
                <div class="stats">
                    <div class="stat-item">
                        <div class="stat-value">45%</div>
                        <div class="stat-label">Poursuivent leurs études</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-value">55%</div>
                        <div class="stat-label">Entrent dans la vie active</div>
                    </div>
                </div>
            </div>
            <div class="resources mt-4">
                <h3>Ressources utiles :</h3>
                <div class="resource-cards">
                    <a href="#" class="resource-card">
                        <i class="fas fa-book"></i> Liste des BTS par secteur
                    </a>
                    <a href="#" class="resource-card">
                        <i class="fas fa-map-marker-alt"></i> CFA près de chez vous
                    </a>
                    <a href="#" class="resource-card">
                        <i class="fas fa-video"></i> Témoignages métiers
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Licence -->
    <section id="licence" class="diploma-section">
        <div class="section-header">
            <h2 class="section-title">Orientation après une Licence</h2>
            <div class="section-icon"><i class="fas fa-book-open"></i></div>
        </div>
        <div class="section-content">
            <div class="row">
                <div class="col-md-6">
                    <h3>Poursuite d'études :</h3>
                    <ul class="path-list">
                        <li><strong>Master</strong> (2 ans) - Recherche ou Professionnel</li>
                        <li><strong>Écoles de commerce</strong> via admissions parallèles</li>
                        <li><strong>Écoles d'ingénieurs</strong> - Cycle ingénieur</li>
                        <li><strong>Écoles spécialisées</strong> (journalisme, architecture...)</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h3>Débouchés professionnels :</h3>
                    <div class="row">
                        <div class="col-6">
                            <ul class="job-list">
                                <li>Chargé de projet</li>
                                <li>Assistant manager</li>
                                <li>Consultant junior</li>
                                <li>Enseignant</li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul class="job-list">
                                <li>Technicien supérieur</li>
                                <li>Chargé de communication</li>
                                <li>Analyste données</li>
                                <li>Fonction publique catégorie A</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="resources mt-4">
                <h3>Ressources utiles :</h3>
                <div class="resource-cards">
                    <a href="#" class="resource-card">
                        <i class="fas fa-book"></i> Liste des Masters par secteur
                    </a>
                    <a href="#" class="resource-card">
                        <i class="fas fa-map-marker-alt"></i> Université de Formation
                    </a>
                    <a href="#" class="resource-card">
                        <i class="fas fa-video"></i> Témoignages métiers
                    </a>
                </div>
            </div>
            <div class="advice-box mt-4">
                <h4><i class="fas fa-lightbulb"></i> Conseil d'orientation :</h4>
                <p>Une licence offre une base solide mais souvent trop générale pour le marché du travail. Nous recommandons fortement une spécialisation en Master pour acquérir des compétences ciblées.</p>
            </div>
        </div>
    </section>

    <!-- Section Master -->
    <section id="master" class="diploma-section">
        <div class="section-header">
            <h2 class="section-title">Orientation après un Master</h2>
            <div class="section-icon"><i class="fas fa-user-graduate"></i></div>
        </div>
        <div class="section-content">
            <div class="row">
                <div class="col-md-6">
                    <h3><i class="fas fa-briefcase"></i> Insertion professionnelle</h3>
                    <p>Postes de cadre moyen/supérieur selon la spécialité :</p>
                    <ul>
                        <li>Chef de projet (35-45k€)</li>
                        <li>Ingénieur d'études</li>
                        <li>Responsable sectoriel</li>
                        <li>Consultant confirmé</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h3><i class="fas fa-flask"></i> Recherche et Doctorat</h3>
                    <p>Pour les masters recherche :</p>
                    <ul>
                        <li>Préparation d'une thèse (3 ans)</li>
                        <li>Attaché temporaire d'enseignement et de recherche (ATER)</li>
                        <li>Ingénieur de recherche</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <h4>Rémunération moyenne à l'embauche :</h4>
                <div class="salaries">
                    <div class="salary-item">
                        <div class="salary-value">32-38k€</div>
                        <div class="salary-label">Secteur public</div>
                    </div>
                    <div class="salary-item">
                        <div class="salary-value">36-42k€</div>
                        <div class="salary-label">Grandes entreprises</div>
                    </div>
                    <div class="salary-item">
                        <div class="salary-value">28-35k€</div>
                        <div class="salary-label">PME/Startups</div>
                    </div>
                </div>
            </div>
            <div class="resources mt-4">
                <h3>Ressources utiles :</h3>
                <div class="resource-cards">
                    <a href="#" class="resource-card">
                        <i class="fas fa-book"></i> Liste des Doctorat par secteur
                    </a>
                    <a href="#" class="resource-card">
                        <i class="fas fa-map-marker-alt"></i> Université de Formation
                    </a>
                    <a href="#" class="resource-card">
                        <i class="fas fa-video"></i> Témoignages métiers
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Doctorat -->
    <section id="doctorat" class="diploma-section">
        <div class="section-header">
            <h2 class="section-title">Orientation après un Doctorat</h2>
            <div class="section-icon"><i class="fas fa-microscope"></i></div>
        </div>
        <div class="section-content">
            <div class="row">
                <div class="col-md-6">
                    <h3><i class="fas fa-university"></i> Carrière académique</h3>
                    <ul>
                        <li><strong>Maître de conférences</strong> (concours très sélectif)</li>
                        <li><strong>Chercheur CNRS/INRAE</strong> etc.</li>
                        <li><strong>Post-doc</strong> à l'étranger (2-3 ans)</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h3><i class="fas fa-building"></i> Secteur privé</h3>
                    <ul>
                        <li><strong>R&D</strong> en entreprise</li>
                        <li><strong>Consultant expert</strong></li>
                        <li><strong>Direction innovation</strong></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h3><i class="fas fa-landmark"></i> Hauts fonctionnaires</h3>
                    <ul>
                        <li><strong>Administration</strong> (catégorie A+)</li>
                        <li><strong>Organismes internationaux</strong> (ONU, UE...)</li>
                        <li><strong>Expertise publique</strong></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="stats-row">
                    <div class="stat">
                        <div class="stat-number">72%</div>
                        <div class="stat-desc">des docteurs travaillent hors académie</div>
                    </div>
                    <div class="stat">
                        <div class="stat-number">54k€</div>
                        <div class="stat-desc">salaire moyen après 5 ans</div>
                    </div>
                    <div class="stat">
                        <div class="stat-number">18%</div>
                        <div class="stat-desc">taux de chômage (moins que la moyenne nationale)</div>
                    </div>
                </div>
            </div>
            <div class="resources mt-4">
                <h3>Ressources utiles :</h3>
                <div class="resource-cards">
                    <a href="#" class="resource-card">
                        <i class="fas fa-book"></i> Liste des Post-Doctorat par secteur
                    </a>
                    <a href="#" class="resource-card">
                        <i class="fas fa-map-marker-alt"></i> Université de Formation
                    </a>
                    <a href="#" class="resource-card">
                        <i class="fas fa-video"></i> Témoignages métiers
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>

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