<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MentorController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\CertificationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name("index");

Route::get('/details', function () {
    return view('details');
})->name("details");

Route::get("/cours", function () {
    return view("cours");
})->name("cours");

Route::get("/mentors", function () {
    return view("mentors");
})->name("mentors");

Route::get("quiz", function () {
    return view("quiz");
})->name("quiz");

Route::get("quiz/bepc", function () {
    return view("quiz.bepc");
})->name("bepc");  

Route::get("quiz/quiz_general   ", function () {
    return view("quiz.quiz_general");
})->name("quiz_general");  

Route::get("quiz/quiz_literal", function () {
    return view("quiz.quiz_literal");
})->name("quiz_literal");  

Route::get("quiz/quiz_scientifique", function () {
    return view("quiz.quiz_scientifique");
})->name("quiz_scientifique");  


// Routes d'authentification
Route::middleware('guest')->group(function () {
    // Login
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
    
    // Registration
    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);
});

// Déconnexion
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Routes protégées (nécessitent une authentification)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile');
});

// Routes pour les mentors
Route::get('/mentor/inscription', [MentorController::class, 'create'])->name('mentor.create');
Route::post('/mentor/store', [MentorController::class, 'store'])->name('mentor.store');
Route::get('/mentor/success', [MentorController::class, 'success'])->name('mentor.success');

// Routes pour les cours
Route::get('/course/create', [CourseController::class, 'create'])->name('course.create');
Route::post('/course/store', [CourseController::class, 'store'])->name('course.store');
Route::get('/course/success', [CourseController::class, 'success'])->name('course.success');

// Routes pour le contact
Route::get('/contact', [ContactController::class, 'show'])->name('contact');
Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');
Route::get('/contact/success', [ContactController::class, 'success'])->name('contact.success');

// Routes pour les quiz
Route::middleware(['auth'])->group(function () {
    // Routes principales des quiz
    Route::get('/quiz/bepc', [QuizController::class, 'bepc'])->name('quiz.bepc');
    Route::get('/quiz/bac', [QuizController::class, 'bac'])->name('quiz.bac');
    Route::get('/quiz/bts', [QuizController::class, 'bts'])->name('quiz.bts');
    Route::get('/quiz/licence', [QuizController::class, 'licence'])->name('quiz.licence');
    Route::get('/quiz/master', [QuizController::class, 'master'])->name('quiz.master');
    Route::get('/quiz/results', [QuizController::class, 'results'])->name('quiz.results');

    // Routes pour les quiz BEPC
    Route::get('/quiz/bepc/quiz_scientifique', [QuizController::class, 'bepcScientifique'])->name('quiz.scientifique');
    Route::get('/quiz/bepc/quiz_literal', [QuizController::class, 'bepcLiteral'])->name('quiz.literal');
    Route::get('/quiz/bepc/quiz_general', [QuizController::class, 'bepcGeneral'])->name('quiz.general');

    // Routes pour les quiz BAC
    Route::get('/quiz/bac/scientifique', [QuizController::class, 'bacScientifique'])->name('quiz.bac.scientifique');
    Route::get('/quiz/bac/literal', [QuizController::class, 'bacLiteral'])->name('quiz.bac.literal');
    Route::get('/quiz/bac/economique', [QuizController::class, 'bacEconomique'])->name('quiz.bac.economique');

    // Routes pour les quiz BTS
    Route::get('/quiz/bts/informatique', [QuizController::class, 'btsInformatique'])->name('quiz.bts.informatique');
    Route::get('/quiz/bts/comptabilite', [QuizController::class, 'btsComptabilite'])->name('quiz.bts.comptabilite');
    Route::get('/quiz/bts/marketing', [QuizController::class, 'btsMarketing'])->name('quiz.bts.marketing');

    // Routes pour les quiz Licence
    Route::get('/quiz/licence/informatique', [QuizController::class, 'licenceInformatique'])->name('quiz.licence.informatique');
    Route::get('/quiz/licence/comptabilite', [QuizController::class, 'licenceComptabilite'])->name('quiz.licence.comptabilite');
    Route::get('/quiz/licence/marketing', [QuizController::class, 'licenceMarketing'])->name('quiz.licence.marketing');

    // Routes pour les quiz Master
    Route::get('/quiz/master/informatique', [QuizController::class, 'masterInformatique'])->name('quiz.master.informatique');
    Route::get('/quiz/master/comptabilite', [QuizController::class, 'masterComptabilite'])->name('quiz.master.comptabilite');
    Route::get('/quiz/master/marketing', [QuizController::class, 'masterMarketing'])->name('quiz.master.marketing');
});

// Routes pour les certifications
Route::get('/certifications', [CertificationController::class, 'index'])->name('certifications.index');
Route::get('/certifications/{id}', [CertificationController::class, 'show'])->name('certifications.show');
Route::get('/certifications/{id}/start', [CertificationController::class, 'start'])->name('certifications.start');