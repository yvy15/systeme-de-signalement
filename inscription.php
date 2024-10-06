<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULAIRE D'INSCRIPTION</title>
    <link rel="stylesheet" href="inscript.css">
    <link rel="stylesheet" href="(link unavailable)" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    

    <div class="container">
        <form method="POST" action="inscript.php">
            <h2>Inscription</h2>
            <div class="form-group">
                <label for="nom"><i class="fa fa-user"></i><span>Nom</span></label>
                <input type="text" id="nom" name="nom" required>
            </div>
            <div class="form-group">
                <label for="email">Prenom</label>
                <input type="text" id="prenom" name="prenom" required>
            </div>
            <div class="form-group">
                <label for="niveau">Niveau</label>
                <input type="text" id="niveau" name="niveau" list="suggestions" placeholder="Choisissez ou tapez une option" class="form-control" required>
                <datalist id="suggestions">
                    <option value="ceso">
                    <option value="travailleur social">
                    <option value="Delegue departemental">
                    <option value="Delegue regional">   
                </datalist> 
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" required>
                <button type="button" class="btn btn-outline-secondary" onclick="togglePasswordVisibility()">
                    <i id="eye-icon" class="fa fa-eye-slash"></i>
                </button>
            </div>
            <div class="form-group">
                <label for="confirmer-password">Confirmer mot de passe</label>
                <input type="password" id="confirmer-password" name="confirmer-password" required>
            </div>
            <button type="submit">S'inscrire</button>
            <p>Vous avez deja un compte ?<a href="connexion.html"> Se connecter</a></p>
        </form>
    </div>
            <script src="script.inscription.js"></script>
</body>
</html>