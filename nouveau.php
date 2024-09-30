<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css">
    <title>nouveau signalements</title>
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

        /* Style pour le titre */
        h1 {
            text-align: center;
            margin-bottom: 20px;
            margin-top: 20px;
            color: #007bff;
        }

        /* Style pour le conteneur du tableau */
        .table-container {
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        /* Style pour le tableau */
        table {
            width: 100%;
            border-collapse: collapse;
        }

        thead {
            background-color: #343a40;
            color: white;
        }

        /* Style des cellules */
        th, td {
            padding: 12px;
            text-align: left;
        }

        /* Style pour les actions */
        .btn-action {
            margin-right: 5px;
        }

        /* Pagination styles */
        .pagination {
            justify-content: center;
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
            <a class="dropdown-item" href="nouveau.php" active>Nouveau</a>
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
    <a href="interface3.1.php">Statistique</a>
</div>

<!-- Contenu principal -->
<div class="content">
    <h1>Nouveaux signalements</h1>

    <!-- Conteneur du tableau des signalements -->
    <div class="table-container">
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nom du formulaire</th>
                    <th scope="col">Date</th>
                    <th scope="col">sexe</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody id="table-body">

            <tbody id="table-body">
            <?php
            include_once "db.php";
            $req = mysqli_query($conn, "SELECT * FROM signalement");
            if (mysqli_num_rows($req) == 0) {
                echo "<tr><td colspan='7' class='text-center'>Aucun signalement</td></tr>";
            } else {
                while ($row = mysqli_fetch_assoc($req)) {
                    // Récupérer les travailleurs sociaux
                    $travailleursReq = mysqli_query($conn, "SELECT nom FROM utilisateur WHERE niveau='travailleur social'");
                    ?>
                    <tr>
                        <td><?=$row['id']?></td>
                        <td><?=$row['nom_victime']?></td>
                        <td><?=$row['date_heure']?></td>
                        <td><?=$row['sexe']?></td>
                        <td><a href="interface5.php?id=<?=$row['id']?>">Detail</td>
                        <?php
                                        }
                                    }
                                    ?>
            </tbody>
        </table>
    </div>
</div>
<!-- Script JavaScript pour ajouter dynamiquement des données dans le tableau -->
<script>
    // Sélection du corps de tableau
    const tableBody = document.getElementById('table-body');

    

    // Fonction pour charger les données du tableau
    function loadTableData(signalements) {
        signalements.forEach(signalement => {
            let row = document.createElement('tr');

            row.innerHTML = `
                <td>${signalement.id}</td>
                <td>${signalement.nomFormulaire}</td>
                <td>${signalement.date}</td>
                <td>${signalement.heure}</td>
                <td>
                    <button class="btn btn-info btn-sm btn-action">Voir</button>
                    <button class="btn btn-danger btn-sm btn-action">Supprimer</button>
                </td>
            `;
            tableBody.appendChild(row);
        });
    }

    // Charger les données de signalements au chargement de la page
    loadTableData(signalements);
</script>

<!-- Script Bootstrap -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
