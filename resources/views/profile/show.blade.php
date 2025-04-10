@extends('navbar.navbar')

@section('contenu')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow" style="border: none; border-radius: 10px; overflow: hidden;">
                <div class="card-header py-3" style="background-color: #8C2711; color: whitesmoke;">
                    <h4 class="mb-0">Mon Profil</h4>
                </div>
                
                <div class="card-body">
                    <div class="row">
                        <!-- Colonne Photo -->
                        <div class="col-md-4 text-center">
                            <div class="mb-4">
                                <img src="{{ $user->photo ? asset('storage/profiles/'.$user->photo) : asset('images/default-profile.png') }}" 
                                     class="rounded-circle shadow" 
                                     width="200" 
                                     height="200"
                                     style="object-fit: cover; border: 3px solid #BF5B21;">
                            </div>
                            
                            <button class="btn btn-sm" 
                                    style="background-color: #BF5B21; color: white;"
                                    data-bs-toggle="modal" 
                                    data-bs-target="#photoModal">
                                <i class="fas fa-camera me-2"></i>Changer la photo
                            </button>
                        </div>
                        
                        <!-- Colonne Informations -->
                        <div class="col-md-8">
                            <div class="mb-4 p-4" style="background-color: whitesmoke; border-radius: 8px;">
                                <div class="row mb-3">
                                    <div class="col-sm-4 fw-bold" style="color: #8C2711;">Nom :</div>
                                    <div class="col-sm-8">{{ $user->name }}</div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-4 fw-bold" style="color: #8C2711;">Prénom :</div>
                                    <div class="col-sm-8">{{ $user->surname }}</div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-4 fw-bold" style="color: #8C2711;">Email :</div>
                                    <div class="col-sm-8">{{ $user->email }}</div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-4 fw-bold" style="color: #8C2711;">Date d'inscription :</div>
                                    <div class="col-sm-8">{{ $user->created_at->format('d/m/Y à H:i') }}</div>
                                </div>
                            </div>
                            
                            <div class="text-end">
                                <a href="#" class="btn" style="background-color: #8C2711; color: white;">
                                    <i class="fas fa-edit me-2"></i>Modifier le profil
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal pour changer la photo -->
<div class="modal fade" id="photoModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #8C2711; color: whitesmoke;">
                <h5 class="modal-title">Changer la photo de profil</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="#" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="photo" class="form-label" style="color: #8C2711;">Sélectionner une image</label>
                        <input class="form-control" type="file" id="photo" name="photo" accept="image/*">
                        <small class="text-muted">Formats acceptés: JPEG, PNG (Max 2MB)</small>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" style="background-color: #BFBFBD;" data-bs-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn" style="background-color: #BF5B21; color: white;">Enregistrer</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Ajoutez ces liens dans votre layout si ce n'est pas déjà fait -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
<style>
    body {
        background-color: #f8f9fa;
    }
    .card {
        border: none;
        transition: transform 0.3s;
    }
    .card:hover {
        transform: translateY(-5px);
    }
</style>
@endsection