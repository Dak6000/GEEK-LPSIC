@extends("navbar.navbar")

@section("contenu")
<div class="container py-4">
    <h1 class="brand-header text-center mb-5" style="color: #8C2711">Contactez-nous</h1>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card contact-card">
                <div class="card-body p-4">
                    <form id="contact-form" action="{{ route('contact.send') }}" method="POST">
                        @csrf
                        
                        <div class="mb-3">
                            <label for="name" class="form-label">Nom complet</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>

                        <div class="mb-3">
                            <label for="subject" class="form-label">Sujet</label>
                            <input type="text" class="form-control" id="subject" name="subject" required>
                        </div>

                        <div class="mb-4">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-lg" style="background-color: #8C2711; color: #FFFFFF;">
                                Envoyer le message
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Script EmailJS -->
<script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
<script>
    (function() {
        emailjs.init("YOUR_PUBLIC_KEY"); // Remplacez par votre clé publique EmailJS
    })();
</script>

<style>
    .contact-card {
        border: none;
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .form-control:focus {
        border-color: #8C2711;
        box-shadow: 0 0 0 0.2rem rgba(140, 39, 17, 0.25);
    }
</style>

<script>
// Contact Form Handling
const contactForm = document.getElementById('contact-form');

if (contactForm) {
    contactForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Récupérer les valeurs du formulaire
        const formData = {
            name: document.getElementById('name').value,
            email: document.getElementById('email').value,
            subject: document.getElementById('subject').value,
            message: document.getElementById('message').value
        };
        
        // Validation basique
        if (!formData.name || !formData.email || !formData.subject || !formData.message) {
            showNotification('Veuillez remplir tous les champs du formulaire.', 'error');
            return;
        }
        
        // Validation de l'email
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(formData.email)) {
            showNotification('Veuillez entrer une adresse email valide.', 'error');
            return;
        }
        
        // Afficher le loader
        const submitButton = contactForm.querySelector('button[type="submit"]');
        const originalButtonText = submitButton.innerHTML;
        submitButton.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Envoi en cours...';
        submitButton.disabled = true;
        
        // Préparer les paramètres pour EmailJS
        const templateParams = {
            to_email: 'support@findy.com',
            from_name: formData.name,
            from_email: formData.email,
            subject: formData.subject,
            message: formData.message
        };
        
        // Envoyer l'email
        emailjs.send('service_gv73c9h', 'template_srcmo2a', templateParams)
            .then(function(response) {
                console.log('SUCCESS!', response.status, response.text);
                showNotification('Votre message a été envoyé avec succès ! Nous vous répondrons dans les plus brefs délais.', 'success');
                contactForm.reset();
            }, function(error) {
                console.error('FAILED...', error);
                let errorMessage = 'Une erreur est survenue lors de l\'envoi du message.';
                
                // Messages d'erreur plus spécifiques
                if (error.text) {
                    switch(error.text) {
                        case 'Invalid template ID':
                            errorMessage = 'Erreur de configuration du template. Veuillez contacter l\'administrateur.';
                            break;
                        case 'Invalid service ID':
                            errorMessage = 'Erreur de configuration du service. Veuillez contacter l\'administrateur.';
                            break;
                        case 'Invalid user ID':
                            errorMessage = 'Erreur de configuration de l\'utilisateur. Veuillez contacter l\'administrateur.';
                            break;
                        default:
                            errorMessage = `Erreur: ${error.text}`;
                    }
                }
                
                showNotification(errorMessage, 'error');
            })
            .finally(function() {
                // Réinitialiser le bouton
                submitButton.innerHTML = originalButtonText;
                submitButton.disabled = false;
            });
    });
}

// Fonction pour afficher les notifications
function showNotification(message, type = 'success') {
    // Créer l'élément de notification
    const notification = document.createElement('div');
    notification.className = `fixed top-4 right-4 p-4 rounded-lg shadow-lg z-50 ${
        type === 'success' ? 'bg-green-500' : 'bg-red-500'
    } text-white`;
    notification.innerHTML = `
        <div class="flex items-center">
            <i class="fas ${type === 'success' ? 'fa-check-circle' : 'fa-exclamation-circle'} mr-2"></i>
            <span>${message}</span>
        </div>
    `;
    
    // Ajouter la notification au DOM
    document.body.appendChild(notification);
    
    // Supprimer la notification après 5 secondes
    setTimeout(() => {
        notification.remove();
    }, 5000);
}
</script>
@endsection 