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
                <a class="nav-link" href="a propos.html">A Propos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.html">Contacts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="formulaire.php">signaler un cas</a>
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

<!-- Contenu principal -->
<div class="content">
    <form method="post"  action="affichage.ts.php">
    <h1>Tous les signalements</h1>

    <!-- Conteneur du tableau des signalements -->
    <div class="table-container">
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <th scope="col">ID_travailleur</th>
                <th scope="col">nom_formulaire</th>
                <th scope="col">status</th>
                <th scope="col">Date_affecter</th>
                <th scope="col">Heure</th>
                <th scope="col">action</th>
            </tr>
            </thead>
            <tbody id="table-body">
                <!-- Les lignes seront insérées ici via JavaScript -->
            </tbody>
        </table>
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
