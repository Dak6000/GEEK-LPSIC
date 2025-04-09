@extends("navbar.navbar")

@section("contenu")
<div class="container">
    <!-- En-tête -->
    <div class="brand-header">Bienvenue sur Findy</div>
    
    <div class="row align-items-center">
        <div class="col-md-6">
            <!-- Titre principal -->
            <h1 class="main-title">Que voulez-vous faire ?</h1>
            
            <!-- Description -->
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
    
    <!-- Cartes d'orientation -->
    <h1 class="brand-header" style="color: #8C2711">Niveau de Diplôme</h1>
    <div class="card-container">
        <!-- Niveau BEPC -->
        <div class="card orientation-card">
            <span class="material-icons card-icon">school</span>
            <div class="card-body">
                <h3 class="card-title">BEPC</h3>
                <p class="card-description">
                    • CAP/Métiers manuels<br>
                    • Formation professionnelle<br>
                    • Apprentissage
                </p>
            </div>
        </div>
    
        <!-- Niveau BAC -->
        <div class="card orientation-card">
            <span class="material-icons card-icon">assignment</span>
            <div class="card-body">
                <h3 class="card-title">BAC</h3>
                <p class="card-description">
                    • BTS/DUT<br>
                    • Licence universitaire<br>
                    • Écoles spécialisées
                </p>
            </div>
        </div>
    
        <!-- Niveau BTS -->
        <div class="card orientation-card">
            <span class="material-icons card-icon">work</span>
            <div class="card-body">
                <h3 class="card-title">BTS</h3>
                <p class="card-description">
                    • Entrée directe en entreprise<br>
                    • Licence professionnelle<br>
                    • Écoles d'ingénieurs
                </p>
            </div>
        </div>
        
        <!-- Niveau Licence -->
        <div class="card orientation-card">
            <span class="material-icons card-icon">library_books</span>
            <div class="card-body">
                <h3 class="card-title">Licence</h3>
                <p class="card-description">
                    • Master recherche/pro<br>
                    • Écoles de commerce<br>
                    • Concours administratifs
                </p>
            </div>
        </div>
        
        <!-- Niveau Master -->
        <div class="card orientation-card">
            <span class="material-icons card-icon">star</span>
            <div class="card-body">
                <h3 class="card-title">Master</h3>
                <p class="card-description">
                    • Doctorat<br>
                    • Cadre en entreprise<br>
                    • Fonction publique catégorie A
                </p>
            </div>
        </div>
    
        <!-- Niveau Doctorat -->
        <div class="card orientation-card">
            <span class="material-icons card-icon">verified</span>
            <div class="card-body">
                <h3 class="card-title">Doctorat</h3>
                <p class="card-description">
                    • Recherche académique<br>
                    • Expert consultant<br>
                    • Hautes fonctions publiques
                </p>
            </div>
        </div>
    </div>

    <!-- Section Témoignages -->
    <h1 class="brand-header" style="color: #8C2711; margin-top: 40px;">Témoignages</h1>
    <div class="row">
        <div class="col-md-4">
            <div class="card testimonial-card">
                <div class="card-body">
                    <p class="card-text">"Findy m'a aidé à choisir la bonne orientation pour ma carrière. Je suis très satisfait des conseils reçus!"</p>
                    <h5 class="card-title">Jean Dupont</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card testimonial-card">
                <div class="card-body">
                    <p class="card-text">"L'équipe de Findy est très professionnelle et à l'écoute. Grâce à eux, j'ai trouvé ma voie!"</p>
                    <h5 class="card-title">Marie Curie</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card testimonial-card">
                <div class="card-body">
                    <p class="card-text">"Je recommande vivement Findy à tous ceux qui cherchent des conseils en orientation. Un service exceptionnel!"</p>
                    <h5 class="card-title">Paul Martin</h5>
                </div>
            </div>
        </div>
    </div>

    <!-- Pied de page -->
    <footer class="footer mt-5">
        <div class="container text-center">
            <p>&copy; 2023 Findy. Tous droits réservés.</p>
            <p><a href="#">Contactez-nous</a> | <a href="#">À propos</a></p>
        </div>
    </footer>
</div>
@endsection
