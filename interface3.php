<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css">
    <title>CESO</title>
    <style>
         body {
            font-family: 'Times New Roman', Times, serif;
        }
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
        .sidebar a, .sidebar .dropdown-toggle {
            padding: 10px 15px;
            text-decoration: none;
            font-size: 18px;
            color: white;
            display: block;
        }
        .sidebar a:hover, .sidebar .dropdown-toggle:hover {
            background-color: #007bff;
            color: white;
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
        .sidebar .dropdown-menu {
            background-color: #343a40;
        }
        .sidebar .dropdown-item {
            color: white;
        }
        .sidebar .dropdown-item:hover {
            background-color: #007bff;
        }
    </style>
</head>
<body>

<!-- Navbar supérieure -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#">Logo</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">Accueil <span class="sr-only">(current)</span></a>
            </li>
            <li class="navbar-nav">
                <a class="nav-link" href="#">A Propos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contacts</a>
            </li>
        </ul>
    </div>
</nav>

<!-- Sidebar à gauche -->
<div class="sidebar">
    <!-- Liste déroulante Signalement -->
    <div class="dropdown">
        <a class="dropdown-toggle" href="#" id="signalementDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Signalement
        </a>
        <div class="dropdown-menu" aria-labelledby="signalementDropdown">
            <a class="dropdown-item" href="nouveau.php">Nouveau</a>
            <a class="dropdown-item" href="interface3.3.php">Tous les signalements</a>
            <a class="dropdown-item" href="encours.php">En cours de traitement</a>
            <a class="dropdown-item" href="terminer.php">Terminé</a>
            <a class="dropdown-item" href="refuser.php">Refusé</a>
        </div>
    </div>

    <!-- Liste déroulante Travailleurs sociaux -->
    <div class="dropdown">
        <a class="dropdown-toggle" href="#" id="travailleursDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Travailleurs sociaux
        </a>
        <div class="dropdown-menu" aria-labelledby="travailleursDropdown">
            <a class="dropdown-item" href="interface3.2.php">Tous les travailleurs sociaux</a>
        </div>
    </div>

    <!-- Statistiques -->
    <a href="interface3.1.html">Statistique</a>
</div>

<!-- Contenu de la page -->
<div class="content">
    <h2>Contenu principal</h2>
    <p>Voici le contenu de la page. La barre latérale à gauche contient des listes déroulantes pour les signalements et les travailleurs sociaux.</p>
</div>

<!-- Scripts Bootstrap -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>