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
    <!-- Liens directs sans listes déroulantes -->
    <a href="nouveau.ts.html">Nouveau Signalement</a>
    <a href="interface4.1.html">Tous les signalements</a>
    <a href="encours.ts.html">En cours de traitement</a>
    <a href="terminer.ts.html">Terminé</a>
    <a href="refuser.ts.html">Refusé</a>
</div>

<!-- Contenu de la page -->
 <form method="post" action="travailleur.php">
<div class="content">
    <h2>Contenu principal</h2>
    <p>Voici le contenu de la page. La barre latérale à gauche contient des liens directs vers les signalements et les travailleurs sociaux.</p>
</div>
</form>
<!-- Scripts Bootstrap -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
