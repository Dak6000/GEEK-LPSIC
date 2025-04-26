@extends("navbar.navbar")

@section("contenu")
<div class="container py-4">
    <h1 class="brand-header text-center mb-5" style="color: #8C2711">Proposer un Cours</h1>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card course-registration-card">
                <div class="card-body p-4">
                    <form action="{{ route('course.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <!-- Informations du Cours -->
                        <h4 class="mb-4" style="color: #8C2711">Informations du Cours</h4>
                        <div class="mb-3">
                            <label for="title" class="form-label">Titre du Cours</label>
                            <input type="text" class="form-control" id="title" name="title" required>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="category" class="form-label">Catégorie</label>
                                <select class="form-select" id="category" name="category" required>
                                    <option value="">Sélectionnez une catégorie</option>
                                    <option value="programmation">Programmation</option>
                                    <option value="design">Design</option>
                                    <option value="marketing">Marketing</option>
                                    <option value="business">Business</option>
                                    <option value="langues">Langues</option>
                                    <option value="autres">Autres</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="level" class="form-label">Niveau</label>
                                <select class="form-select" id="level" name="level" required>
                                    <option value="">Sélectionnez un niveau</option>
                                    <option value="debutant">Débutant</option>
                                    <option value="intermediaire">Intermédiaire</option>
                                    <option value="avance">Avancé</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="duration" class="form-label">Durée (en minutes)</label>
                                <input type="number" class="form-control" id="duration" name="duration" min="1" required>
                            </div>
                            <div class="col-md-6">
                                <label for="price" class="form-label">Prix (FCFA)</label>
                                <input type="number" class="form-control" id="price" name="price" min="0" step="0.01" required>
                            </div>
                        </div>

                        <!-- Image du Cours -->
                        <div class="mb-4">
                            <label for="image" class="form-label">Image du Cours</label>
                            <input type="file" class="form-control" id="image" name="image" accept="image/*">
                            <small class="text-muted">Format recommandé : 16:9, max 2MB</small>
                        </div>

                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-lg" style="background-color: #8C2711; color: #FFFFFF;">
                                Soumettre le Cours
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .course-registration-card {
        border: none;
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .form-control:focus {
        border-color: #8C2711;
        box-shadow: 0 0 0 0.2rem rgba(140, 39, 17, 0.25);
    }

    .form-select:focus {
        border-color: #8C2711;
        box-shadow: 0 0 0 0.2rem rgba(140, 39, 17, 0.25);
    }
</style>
@endsection 