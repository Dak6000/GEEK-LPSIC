@extends("navbar.navbar")

@section("contenu")
<div class="container">
    <!-- En-tête -->
    <div class="brand-header">Findy</div>
    
    <div class="row align-items-center">
        <div class="col-md-6">
            <!-- Titre principal -->
            <h1 class="main-title">Que voulez-vous faire ?</h1>
            
            <!-- Description -->
            <p class="description">
                Nous mettons à votre disposition une orientation<br>
                sélectionnée par notre équipe d'experts.<br>
                Bénéficiez d'une assistance personnalisée pour<br>
                votre orientation post-Bac.
            </p>
        </div>
        <div class="col-md-5">
            <img src="{{ asset("images/photo1.jpg") }}" class="img-fluid rounded-image w-80" alt="Photo d'accueil">
        </div>
    </div>
    
    <!-- Cartes d'orientation -->
    <div class="card-container">
        <!-- Carte Parcours -->
        <div class="card orientation-card">
            <span class="material-icons card-icon" style="font-size: 3rem">work</span>
            <div class="card-body">
                <h2 class="card-title">BTS</h2>
                <p class="card-description">Découvrez les parcours adaptés à votre profil en BTS</p>
            </div>
        </div>
        
        <!-- Carte Licence -->
        <div class="card orientation-card">
            <span class="material-icons card-icon" style="font-size: 3rem">school</span>
            <div class="card-body">
                <h2 class="card-title">Licence</h2>
                <p class="card-text">Explorez les différentes licences disponibles</p>
            </div>
        </div>
        
        <div class="card orientation-card">
            <span class="material-icons card-icon" style="font-size: 3rem">school</span>
            <div class="card-body">
                <h2 class="card-title">Master</h2>
                <p class="card-text">Options spécialisées pour votre avenir</p>
            </div>
        </div>

        <div class="card orientation-card">
            <span class="material-icons card-icon" style="font-size: 3rem">groups</span>
            <div class="card-body">
                <h2 class="card-title">Doctorat</h2>
                <p>Découvrez nos programmes de doctorat de haute qualité, conçus pour vous préparer à une carrière académique ou professionnelle d'excellence.</p>
            </div>
        </div>
    </div>
</div>
@endsection