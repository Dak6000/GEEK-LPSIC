@extends("navbar.navbar")

@section("contenu")
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <div class="card course-success-card">
                <div class="card-body p-5">
                    <i class="fas fa-check-circle text-success mb-4" style="font-size: 4rem;"></i>
                    <h2 class="mb-4" style="color: #8C2711">Cours Soumis avec Succès !</h2>
                    <p class="lead mb-4">Merci pour votre contribution. Notre équipe va examiner votre cours et vous contactera dans les plus brefs délais.</p>
                    <div class="mt-4">
                        <a href="{{ route('index') }}" class="btn btn-lg" style="background-color: #8C2711; color: #FFFFFF;">
                            Retour à l'accueil
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .course-success-card {
        border: none;
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }
</style>
@endsection 