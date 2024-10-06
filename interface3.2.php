<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css">
    <title>Signalement travailleur social</title>
   <style>
    /* Style pour la barre latérale gauche */
.sidebar {
    height: 100vh; /* La hauteur de la fenêtre */
    width: 250px; /* Largeur de la barre latérale */
    position: fixed; /* La barre reste en place pendant le défilement */
    top: 56px; /* Aligner avec la navbar supérieure */
    left: 0;
    background-color: #343a40; /* Couleur de fond */
    padding-top: 20px; /* Espacement supérieur */
}

body {
    font-family: 'Times New Roman', Times, serif;
}

/* Styles pour les éléments du menu */
.sidebar .dropdown-toggle {
    padding: 10px 15px;
    color: white; /* Couleur du texte */
    display: block; /* Affiche chaque élément sur une nouvelle ligne */
    cursor: pointer; /* Indique que c'est cliquable */
}

.sidebar .dropdown-toggle:hover {
    background-color: #007bff; /* Couleur au survol */
}

/* Styles pour le menu déroulant */
.sidebar .dropdown-menu {
    background-color: #343a40; /* Couleur de fond du menu déroulant */
}

.sidebar .dropdown-item {
    padding: 10px 15px;
    color: white; /* Couleur du texte */
    cursor: pointer; /* Indique que c'est cliquable */
}

.sidebar .dropdown-item:hover {
    background-color: #007bff; /* Couleur au survol */
}

/* Style pour ajuster le contenu de la page à côté de la barre latérale */
.content {
    margin-left: 250px; /* Marger pour laisser de la place à la barre latérale */
    padding: 20px; /* Espacement autour du contenu */
}

/* Style pour la navbar supérieure */
.navbar {
    background-color: #007bff; /* Couleur de fond de la navbar */
}

.navbar a {
    color: white; /* Couleur des liens dans la navbar */
}

/* Style pour le titre */
h1 {
    text-align: center; /* Centrer le titre */
    margin-bottom: 20px; /* Espacement inférieur */
    margin-top: 20px; /* Espacement supérieur */
    color: #007bff; /* Couleur du titre */
}

/* Style pour le conteneur du tableau */
.table-container {
    padding: 20px; /* Espacement autour du tableau */
    background-color: white; /* Couleur de fond */
    border-radius: 8px; /* Coins arrondis */
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Ombre */
}

/* Style pour le tableau */
table {
    width: 100%; /* Largeur du tableau */
    border-collapse: collapse; /* Fusion des bordures */
}

thead {
    background-color: #343a40; /* Couleur de fond du header */
    color: white; /* Couleur du texte */
}

/* Style des cellules */
th, td {
    padding: 12px; /* Espacement des cellules */
    text-align: left; /* Alignement à gauche */
}
.sidebar-item {
    padding: 10px 15px;
    color: white; /* Couleur du texte */
    display: block; /* Affiche sur une nouvelle ligne */
    cursor: pointer; /* Indique que c'est cliquable */
}

.sidebar-item:hover {
    background-color: #007bff; /* Couleur au survol */
}
.table-scroll {
    max-height: 60vh; /* Ajustez selon vos besoins */
    overflow-y: auto; /* Activer le défilement vertical */
}

/* Style pour les actions */
.btn-action {
    margin-right: 5px; /* Espacement à droite des boutons */
}

/* Pagination styles */
.pagination {
    justify-content: center; /* Centrer la pagination */
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
                <a class="nav-link" href="interface3.2.php">Accueil <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="a propos.php">A Propos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.php">Contacts</a>
            </li>
        </ul>
    </div>
</nav>
<!-- Sidebar à gauche -->
<div class="sidebar">
    <div class="dropdown">
        <span class="dropdown-toggle" id="signalementDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Signalement
        </span>
        <div class="dropdown-menu" aria-labelledby="signalementDropdown">
            <span class="dropdown-item" onclick="window.location='nouveau.php'">Nouveau</span>
            <span class="dropdown-item" onclick="window.location='interface3.3.php'">Tous les signalements</span>
            <span class="dropdown-item" onclick="window.location='encours.php'">En cours de traitement</span>
            <span class="dropdown-item" onclick="window.location='terminer.php'">Terminé</span>
            <span class="dropdown-item" onclick="window.location='refuser.php'">Refusé</span>
        </div>
    </div>
    
    <div class="dropdown">
        <span class="dropdown-toggle" id="travailleursDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Travailleurs sociaux
        </span>
        <div class="dropdown-menu" aria-labelledby="travailleursDropdown">
            <span class="dropdown-item" onclick="window.location='interface3.2.php'">Tous les travailleurs sociaux</span>
        </div>
    </div>

    <span class="sidebar-item" onclick="window.location='interface3.1.php'">Statistique</span>
</div>

<!-- Contenu principal -->
<div class="content">
    <h1>Signalements Affectés</h1>
    <div class="table-container">
    <div class="table-scroll">
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nom Victime</th>
                    <th scope="col">Date</th>
                    <th scope="col">Sexe</th>
                    <th scope="col">Nom Travailleur</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody id="table-body">
            <?php
            include_once "db.php";

            // Requête pour récupérer les signalements et les travailleurs associés
            $req = mysqli_query($conn, "
                SELECT s.id AS id_signalement, s.nom_victime, s.date_heure, s.sexe, a.nom_travailleur 
                FROM signalement s
                LEFT JOIN affectation a ON s.id_travailleur = (SELECT id FROM utilisateur WHERE nom = a.nom_travailleur)
            ");

            if (mysqli_num_rows($req) == 0) {
                echo "<tr><td colspan='7' class='text-center'>Aucun signalement affecté</td></tr>";
            } else {
                while ($row = mysqli_fetch_assoc($req)) {
                    ?>
                    <tr>
                        <td><?=$row['id_signalement']?></td>
                        <td><?=$row['nom_victime']?></td>
                        <td><?=$row['date_heure']?></td>
                        <td><?=$row['sexe']?></td>
                        <td><?=$row['nom_travailleur']?></td>
                        <td><a href="interface5.php?id=<?=$row['id_signalement']?>">Detail</td>
                        <?php
                                        }
                                    }
                                    ?>
            </tbody>
            </tbody>
        </table>
    </div>
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

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>