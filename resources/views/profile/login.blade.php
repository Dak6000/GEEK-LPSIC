<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Se Connecter</title>
  <link rel="stylesheet" href="{{ asset("css/auth.css") }}">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body class="login-page">
  <div class="auth-container">
    <h1>Se Connecter</h1>
    @if($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
      @endif

      @if(session('status'))
      <div class="alert alert-success">
          {{ session('status') }}
      </div>
    @endif
    
    <form class="auth-form" method="POST" action="{{ route('login') }}">
      @csrf
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
      
      <button type="submit" class="auth-btn">Se connecter</button>
      
      <div class="links">
        <a href="#" class="auth-link">Mot de passe oublié?</a>
        <a href="{{ route('register') }}" class="auth-link">Nouveau compte? Créer</a>
      </div>
    </form>
  </div>
</body>
</html>
