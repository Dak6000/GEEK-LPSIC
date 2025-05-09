<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Créer un compte</title>
  <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body class="register-page">
  <div class="auth-container">
    <h1>Créer un compte</h1>
    @if($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
    @endif
    
    <form class="auth-form" method="POST" action="{{ route('register') }}">
      @csrf
      <div class="form-group">
        <div class="input-with-icon">
          <span class="material-icons">person</span>
          <input type="text" id="name" name="name" placeholder="Nom" required>
        </div>
      </div>

      <div class="form-group">
        <div class="input-with-icon">
          <span class="material-icons">person_outline</span>
          <input type="text" id="surname" name="surname" placeholder="Prénom" required>
        </div>
      </div>
      
      <div class="form-group">
        <div class="input-with-icon">
          <span class="material-icons">email</span>
          <input type="email" id="email" name="email" placeholder="Email" required>
        </div>
      </div>
      
      <div class="form-group">
        <div class="input-with-icon">
          <span class="material-icons">lock</span>
          <input type="password" id="password" name="password" placeholder="Mot de passe" required>
        </div>
      </div>
      
      <div class="form-group">
        <div class="input-with-icon">
          <span class="material-icons">lock_outline</span>
          <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirmer le mot de passe" required>
        </div>
      </div>
      
      <button type="submit" class="auth-btn">Enregistrer</button>
      
      <div class="links">
        <a href="{{ route('login') }}" class="auth-link">Déjà un compte? Se connecter</a>
      </div>
    </form>
  </div>
</body>
</html>
