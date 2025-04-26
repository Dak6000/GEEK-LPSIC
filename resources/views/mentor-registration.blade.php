@extends("navbar.navbar")

@section("contenu")
<div class="container py-4">
    <h1 class="brand-header text-center mb-5" style="color: #8C2711">Devenir Mentor</h1>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mentor-registration-card">
                <div class="card-body p-4">
                    <form action="{{ route('mentor.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <!-- Informations Personnelles -->
                        <h4 class="mb-4" style="color: #8C2711">Informations Personnelles</h4>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="firstname" class="form-label">Prénom</label>
                                <input type="text" class="form-control" id="firstname" name="firstname" required>
                            </div>
                            <div class="col-md-6">
                                <label for="lastname" class="form-label">Nom</label>
                                <input type="text" class="form-control" id="lastname" name="lastname" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ Auth::user()->email }}" readonly style="background-color: #f8f9fa;">
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label">Téléphone</label>
                            <input type="tel" class="form-control" id="phone" name="phone" required>
                        </div>

                        <!-- Photo de Profil -->
                        <div class="mb-4">
                            <label for="profile_image" class="form-label">Photo de Profil</label>
                            <input type="file" class="form-control" id="profile_image" name="profile_image" accept="image/*">
                        </div>

                        <!-- Profil Professionnel -->
                        <h4 class="mb-4" style="color: #8C2711">Profil Professionnel</h4>
                        <div class="mb-3">
                            <label for="title" class="form-label">Titre Professionnel</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Ex: Développeur Full Stack" required>
                        </div>

                        <div class="mb-3">
                            <label for="specialties" class="form-label">Spécialités</label>
                            <textarea class="form-control" id="specialties" name="specialties" rows="3" placeholder="Listez vos spécialités (une par ligne)" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="experience" class="form-label">Expérience</label>
                            <textarea class="form-control" id="experience" name="experience" rows="3" placeholder="Décrivez votre expérience professionnelle" required></textarea>
                        </div>

                        <!-- Approche Mentoring -->
                        <h4 class="mb-4" style="color: #8C2711">Approche Mentoring</h4>
                        <div class="mb-3">
                            <label for="mentoring_approach" class="form-label">Votre Approche</label>
                            <textarea class="form-control" id="mentoring_approach" name="mentoring_approach" rows="4" placeholder="Décrivez votre approche du mentoring" required></textarea>
                        </div>

                        <!-- Disponibilités -->
                        <h4 class="mb-4" style="color: #8C2711">Disponibilités</h4>
                        <div class="mb-3">
                            <label class="form-label">Jours et Horaires Disponibles</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" name="availability[]" value="lundi">
                                        <label class="form-check-label">Lundi</label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" name="availability[]" value="mardi">
                                        <label class="form-check-label">Mardi</label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" name="availability[]" value="mercredi">
                                        <label class="form-check-label">Mercredi</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" name="availability[]" value="jeudi">
                                        <label class="form-check-label">Jeudi</label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" name="availability[]" value="vendredi">
                                        <label class="form-check-label">Vendredi</label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" name="availability[]" value="samedi">
                                        <label class="form-check-label">Samedi</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="hours" class="form-label">Horaires Préférés</label>
                            <input type="text" class="form-control" id="hours" name="hours" placeholder="Ex: 18h-20h, 14h-16h" required>
                        </div>

                        <!-- Tarification -->
                        <h4 class="mb-4" style="color: #8C2711">Tarification</h4>
                        <div class="mb-3">
                            <label for="hourly_rate" class="form-label">Tarif Horaire (FCFA)</label>
                            <input type="number" class="form-control" id="hourly_rate" name="hourly_rate" min="0" required>
                        </div>

                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-lg" style="background-color: #8C2711; color: #FFFFFF;">
                                Soumettre ma Candidature
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .mentor-registration-card {
        border: none;
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .form-control:focus {
        border-color: #8C2711;
        box-shadow: 0 0 0 0.2rem rgba(140, 39, 17, 0.25);
    }

    .form-check-input:checked {
        background-color: #8C2711;
        border-color: #8C2711;
    }
</style>
@endsection 