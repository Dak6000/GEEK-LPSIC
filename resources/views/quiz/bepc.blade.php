@extends("navbar.navbar")

@section("contenu")
<style>
  body {
    font-family: 'Segoe UI', sans-serif;
    background-color: #fefefe;
    margin: 0;
    padding: 40px;
    display: flex;
    flex-direction: column;
    align-items: center;
  }
  
  h2::before {
    content: "📝 ";
    color: #8C2711;
  }
  
  h2 {
    color: #8C2711;
    margin-bottom: 20px;
  }
  
  form#notes-form {
    background-color: #fff;
    padding: 25px 30px;
    border-radius: 12px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    max-width: 400px;
    width: 100%;
  }
  
  form label {
    display: block;
    margin-bottom: 15px;
    font-weight: bold;
    color: #333;
  }
  
  form input[type="number"] {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    border: 2px solid #8C2711;
    border-radius: 6px;
    font-size: 16px;
  }
  
  form button {
    margin-top: 15px;
    width: 100%;
    padding: 12px;
    background-color: #8C2711;
    color: white;
    font-weight: bold;
    border: none;
    border-radius: 6px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }
  
  form button:hover {
    background-color: #a53320;
  }
</style>

<div class="container">
    <h1>Quiz BEPC</h1>
    <form id="quiz-form">
        <label>Maths : <input type="number" id="maths" min="0" max="20" required></label><br>
        <label>Français : <input type="number" id="francais" min="0" max="20" required></label><br>
        <label>Anglais : <input type="number" id="an" min="0" max="20" required></label><br>
        <label>Physique : <input type="number" id="pc" min="0" max="20" required></label><br>
        <button type="submit">Continuer</button>
    </form>
</div>

<script>
document.getElementById("quiz-form").addEventListener("submit", function(event) {
    event.preventDefault(); // Empêche le rechargement de la page
  
    const maths = parseFloat(document.getElementById("maths").value);
    const francais = parseFloat(document.getElementById("francais").value);
    const an = parseFloat(document.getElementById("an").value);
    const pc = parseFloat(document.getElementById("pc").value);
  
    // Validation des notes
    if (isNaN(maths) || isNaN(francais) || isNaN(an) || isNaN(pc)) {
        alert("Veuillez entrer des notes valides");
        return;
    }

    if (maths < 0 || maths > 20 || francais < 0 || francais > 20 || 
        an < 0 || an > 20 || pc < 0 || pc > 20) {
        alert("Les notes doivent être comprises entre 0 et 20");
        return;
    }
  
    // On calcule les moyennes par domaine
    let science = (maths + pc) / 2;
    let litteraire = (francais + an) / 2;
  
    // On décide vers quel quiz on envoie
    if (science > litteraire && science >= 12) {
        window.location.href = "{{ route('quiz_scientifique') }}";
    } else if (litteraire >= 12) {
        window.location.href = "{{ route('quiz_literal') }}";
    } else {
        window.location.href = "{{ route('quiz_general') }}";
    }
});
</script>
@endsection
