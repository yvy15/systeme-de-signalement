<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css">
    <title>nouveau signalements</title>
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
        body {
            font-family: 'Times New Roman', Times, serif;
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

        .table-scroll {
    max-height: 60vh; /* Ajustez selon vos besoins */
    overflow-y: auto; /* Activer le défilement vertical */
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
    <a class="navbar-brand" href="#">MINAS</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="interface4.1.php">Accueil <span class="sr-only">(current)</span></a>
            </li>
            <li class="navbar-nav">
                <a class="nav-link" href="a propos.php">A Propos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.php">Contacts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="interface2.php">signaler un cas</a>
            </li>
        </ul>
    </div>
</nav>

<!-- Sidebar à gauche -->
<div class="sidebar">
    <!-- Liens directs sans listes déroulantes -->
    <a href="nouveau.ts.php">Nouveau Signalement</a>
    <a href="interface4.1.php">Tous les signalements</a>
    <a href="encours.ts.php">En cours de traitement</a>
    <a href="terminer.ts.php">Terminé</a>
    <a href="refuser.ts.php">Refusé</a>
</div>

<!-- Contenu principal -->
<div class="content">
    <form method="post"  action="affichage.ts.php">
    <h1>Tous les signalements</h1>

    <!-- Conteneur du tableau des signalements -->
    <div class="table-container">
    <div class="table-scroll">
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <th scope="col">nom_formulaire</th>
                <th scope="col">status</th>
                <th scope="col">Date_affecter</th>
                <th scope="col">action</th>
            </tr>
            </thead>
            <tbody id="table-body">
            <?php
// Vérifier si le paramètre 'nom' est défini dans l'URL
if (isset($_GET['nom'])) {
    // Décoder la valeur du paramètre 'nom'
    $nom_utilisateur = urldecode($_GET['nom']);

    // Inclure la connexion à la base de données
    include_once "db.php";

    // Préparer une requête SQL sécurisée pour éviter les injections SQL
    $sql = "SELECT * FROM affectation WHERE nom_travailleur = ?";
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        // Lier le paramètre 'nom_travailleur' à la requête préparée
        mysqli_stmt_bind_param($stmt, 's', $nom_utilisateur);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        // Vérifier s'il y a des résultats
        if (mysqli_num_rows($result) == 0) {
            echo "<tr><td colspan='7' class='text-center'>Aucun signalement</td></tr>";
        } else {
            // Boucle pour afficher chaque résultat
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                <td><?= htmlspecialchars($row['nom_victime']) ?></td>

                    <td><?= htmlspecialchars($row['statut']) ?></td>
                    <td><?= htmlspecialchars($row['date_affecter']) ?></td>
                    
                    <td><a href="detail.ts.php?date_affecter=<?= urlencode($row['date_affecter']) ?>">Detail</a></td>
                </tr>
                <?php
            }
        }
        // Libérer le résultat et fermer la requête préparée
        mysqli_free_result($result);
        mysqli_stmt_close($stmt);
    } else {
        // Gérer les erreurs de la requête
        echo "Erreur dans la préparation de la requête : " . mysqli_error($conn);
    }
} else {
    echo "Nom d'utilisateur non spécifié.";
}
?>

        </table>
    </div>
    </div>
</form>
</div>
<script>

    function loadTableData(affectations) {
        const tableBody = document.getElementById('table-body');
        tableBody.innerHTML = ''; // Vider le corps de tableau avant d'ajouter de nouvelles lignes

        affectations.forEach(affectation => {
            let row = document.createElement('tr');

            row.innerHTML = `
                <td>${affectation.nom_victime}</td>
                <td>${affectation.nom_travailleur}</td>
                <td>${affectation.status}</td>
                <td>${affectation.date_affectation}</td>
                <td>${affectation.heure_affectation}</td>
                <td>
                    <button class="btn btn-info btn-sm btn-action">Voir</button>
                    <button class="btn btn-danger btn-sm btn-action">Supprimer</button>
                </td>
            `;
            tableBody.appendChild(row);
        });
    }

    loadTableData(affectations);
</script>

<!-- Script Bootstrap -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
