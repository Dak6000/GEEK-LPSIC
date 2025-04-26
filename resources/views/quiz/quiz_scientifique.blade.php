@extends("navbar.navbar")

@section("contenu")
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card quiz-card">
                <div class="card-body">
                    <div class="quiz-header text-center mb-4">
                        <h2 class="mb-3" style="color: #8C2711">Quiz Scientifique</h2>
                        <div class="quiz-info">
                            <span class="badge bg-primary me-2">Temps restant: <span id="timer">30:00</span></span>
                            <span class="badge bg-info">Question <span id="current-question">1</span>/10</span>
                        </div>
                    </div>

                    <div class="quiz-content">
                        <form id="quiz-form">
                            <!-- Question 1 -->
                            <div class="question-container mb-4">
                                <h5 class="question-text mb-3">1. Quelle est la formule chimique de l'eau ?</h5>
                                <div class="options">
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="radio" name="q1" id="q1a" value="a">
                                        <label class="form-check-label" for="q1a">H2O</label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="radio" name="q1" id="q1b" value="b">
                                        <label class="form-check-label" for="q1b">CO2</label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="radio" name="q1" id="q1c" value="c">
                                        <label class="form-check-label" for="q1c">O2</label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="radio" name="q1" id="q1d" value="d">
                                        <label class="form-check-label" for="q1d">H2O2</label>
                                    </div>
                                </div>
                            </div>

                            <!-- Question 2 -->
                            <div class="question-container mb-4">
                                <h5 class="question-text mb-3">2. Quelle est l'unité de mesure de la force ?</h5>
                                <div class="options">
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="radio" name="q2" id="q2a" value="a">
                                        <label class="form-check-label" for="q2a">Newton (N)</label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="radio" name="q2" id="q2b" value="b">
                                        <label class="form-check-label" for="q2b">Pascal (Pa)</label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="radio" name="q2" id="q2c" value="c">
                                        <label class="form-check-label" for="q2c">Joule (J)</label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="radio" name="q2" id="q2d" value="d">
                                        <label class="form-check-label" for="q2d">Watt (W)</label>
                                    </div>
                                </div>
                            </div>

                            <!-- Navigation -->
                            <div class="quiz-navigation d-flex justify-content-between mt-4">
                                <button type="button" class="btn btn-secondary" id="prev-btn" disabled>
                                    <i class="fas fa-arrow-left me-2"></i>Précédent
                                </button>
                                <button type="button" class="btn" style="background-color: #8C2711; color: #FFFFFF;" id="next-btn">
                                    Suivant<i class="fas fa-arrow-right ms-2"></i>
                                </button>
                            </div>

                            <!-- Bouton de soumission -->
                            <div class="text-center mt-4" id="submit-container" style="display: none;">
                                <button type="submit" class="btn btn-lg" style="background-color: #8C2711; color: #FFFFFF;">
                                    Soumettre le Quiz
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .quiz-card {
        border: none;
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .question-container {
        background-color: #140a0b;
        padding: 20px;
        border-radius: 10px;
        transition: all 0.3s ease;
    }

    .question-container:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .form-check-input:checked {
        background-color: #8C2711;
        border-color: #8C2711;
    }

    .form-check-label {
        cursor: pointer;
        padding: 8px 12px;
        border-radius: 5px;
        transition: all 0.3s ease;
    }

    .form-check-label:hover {
        background-color: #f0f0f0;
    }
</style>

<script>
let currentQuestion = 1;
const totalQuestions = 2;
const correctAnswers = {
    q1: 'a', // H2O
    q2: 'a'  // Newton (N)
};

// Fonction pour mettre à jour l'affichage des questions
function updateQuestionDisplay() {
    const questions = document.querySelectorAll('.question-container');
    questions.forEach((q, index) => {
        q.style.display = index + 1 === currentQuestion ? 'block' : 'none';
    });

    // Mettre à jour le numéro de la question
    document.getElementById('current-question').textContent = currentQuestion;

    // Gérer les boutons de navigation
    document.getElementById('prev-btn').disabled = currentQuestion === 1;
    document.getElementById('next-btn').style.display = currentQuestion === totalQuestions ? 'none' : 'block';
    document.getElementById('submit-container').style.display = currentQuestion === totalQuestions ? 'block' : 'none';
}

// Gestionnaire d'événements pour le bouton suivant
document.getElementById('next-btn').addEventListener('click', () => {
    if (currentQuestion < totalQuestions) {
        currentQuestion++;
        updateQuestionDisplay();
    }
});

// Gestionnaire d'événements pour le bouton précédent
document.getElementById('prev-btn').addEventListener('click', () => {
    if (currentQuestion > 1) {
        currentQuestion--;
        updateQuestionDisplay();
    }
});

// Timer
let timeLeft = 30 * 60; // 30 minutes en secondes
const timerDisplay = document.getElementById('timer');

const timer = setInterval(() => {
    timeLeft--;
    const minutes = Math.floor(timeLeft / 60);
    const seconds = timeLeft % 60;
    timerDisplay.textContent = `${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;

    if (timeLeft <= 0) {
        clearInterval(timer);
        document.getElementById('quiz-form').submit();
    }
}, 1000);

// Fonction pour vérifier les réponses
function checkAnswers() {
    let score = 0;
    const totalQuestions = Object.keys(correctAnswers).length;

    for (let question in correctAnswers) {
        const selectedAnswer = document.querySelector(`input[name="${question}"]:checked`);
        if (selectedAnswer && selectedAnswer.value === correctAnswers[question]) {
            score++;
        }
    }

    const percentage = (score / totalQuestions) * 100;
    return percentage;
}

// Gestionnaire de soumission du formulaire
document.getElementById('quiz-form').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const score = checkAnswers();
    const resultContainer = document.createElement('div');
    resultContainer.className = 'result-container text-center mt-4';
    
    if (score >= 50) {
        resultContainer.innerHTML = `
            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">Félicitations !</h4>
                <p>Vous avez obtenu ${score}% de bonnes réponses.</p>
                <hr>
                <p class="mb-0">Vous allez être redirigé vers la page d'accueil...</p>
            </div>
        `;
        
        // Afficher le résultat
        document.querySelector('.quiz-content').appendChild(resultContainer);
        
        // Rediriger après 3 secondes
        setTimeout(() => {
            window.location.href = "{{ route('index') }}";
        }, 5000);
    } else {
        resultContainer.innerHTML = `
            <div class="alert alert-danger" role="alert">
                <h4 class="alert-heading">Dommage !</h4>
                <p>Vous avez obtenu ${score}% de bonnes réponses.</p>
                <hr>
                <p class="mb-0">Vous devez obtenir au moins 50% pour réussir.</p>
            </div>
        `;
        
        // Afficher le résultat
        document.querySelector('.quiz-content').appendChild(resultContainer);
        
        // Réinitialiser le formulaire après 3 secondes
        setTimeout(() => {
            resultContainer.remove();
            document.getElementById('quiz-form').reset();
            currentQuestion = 1;
            updateQuestionDisplay();
        }, 5000);
    }
});

// Initialiser l'affichage
updateQuestionDisplay();
</script>
@endsection
