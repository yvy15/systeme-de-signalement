<?php 
// Démarrer la session
session_start();

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['user_id'])) {
    // Rediriger vers la page de connexion si l'utilisateur n'est pas connecté
    header("Location: connexion.php");
    exit();
}

// Récupérer les informations de session
$nom_utilisateur = $_SESSION['user_name'] ?? '';
$email = $_SESSION['user_id'] ?? '';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css">
    <title>Travailleur social</title>
    <style>
        /* Style pour la barre latérale gauche */
        .sidebar {
            height: 100vh; /* La hauteur de la fenêtre */
            width: 250px; /* Largeur de la barre latérale */
            position: fixed; /* La barre reste en place pendant le défilement */
            top: 56px; /* Aligner avec la navbar supérieure */
            left: 0;
            background-color: #343a40;
            padding-top: 20px;
        }
        .sidebar a {
            padding: 10px 15px;
            text-decoration: none;
            font-size: 18px;
            color: white;
            display: block;
        }
        .sidebar a:hover {
            background-color: #007bff;
            color: white;
        }

        body {
            font-family: 'Times New Roman', Times, serif;
        }
        /* Style pour ajuster le contenu de la page à côté de la barre latérale */
        .content {
            margin-left: 250px; /* Marger pour laisser de la place à la barre latérale */
            padding: 20px;
        }

        /* Style pour la navbar supérieure */
        .navbar {
            background-color: #007bff;
        }
        .navbar a {
            color: white;
        }
    </style>
</head>
<body>

<!-- Navbar supérieure -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#">MINAS</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="interface4.php">Accueil <span class="sr-only">(current)</span></a>
            </li>
            <li class="navbar-nav">
                <a class="nav-link" href="a propos.php">A Propos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.php">Contacts</a>
            </li>
            
            </li>
            <li class="nav-item">
                <a class="nav-link" href="interface2.php">signaler un cas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">Se Deconnecter</a>
            </li>

        </ul>
    </div>
</nav>

<!-- Sidebar à gauche -->
<div class="sidebar">
    <!-- Liens directs sans listes déroulantes -->
    <a href="nouveau.ts.php?nom=<?= urlencode($nom_utilisateur); ?>">Nouveau Signalement</a>
<a href="interface4.1.php?nom=<?= urlencode($nom_utilisateur); ?>">Tous les signalements</a>
<a href="encours.ts.php?nom=<?= urlencode($nom_utilisateur); ?>">En cours de traitement</a>
<a href="terminer.ts.php?nom=<?= urlencode($nom_utilisateur); ?>">Terminé</a>
<a href="refuser.ts.php?nom=<?= urlencode($nom_utilisateur); ?>">Refusé</a>

</div>

<!-- Contenu de la page -->
 <form method="post" action="travailleur.php">
<div class="content">
<h1><?php echo $nom_utilisateur;?></h1>
    <p>BIENVENUE SUR VOTRE TABLEAU DE BORD </p>
</div>
</form>
<!-- Scripts Bootstrap -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
