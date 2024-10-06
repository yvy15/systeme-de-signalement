<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fiche de Signalement</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4; /* Couleur d'arrière-plan douce */
        }
        table {
            width: 100%;
            margin-top: 20px;
        }
        th {
            background-color: #007bff; /* Couleur bleue pour l'en-tête */
            color: white;
        }
        td {
            background-color: #ffffff; /* Couleur blanche pour les cellules */
        }
        .action-cell {
            background-color: #f8f9fa; /* Couleur d'arrière-plan pour la colonne Actions */
        }
        button {
            background-color: #28a745; /* Vert pour le bouton */
            color: white;
        }
        button:hover {
            background-color: #218838; /* Vert foncé au survol */
        }
        .note-input {
            margin-top: 10px; /* Espacement pour le champ de note */
        }
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #f2f2f2; /* Couleur de fond pour les lignes paires */
        }
    </style>
</head>
<body>

    <h1 class="text-center mb-4">Fiche d'affectation</h1>
    <table class="table table-striped table-bordered">
        <thead>
          <tr>
          <th scope="col">nom_formulaire</th>
          <th scope="col">Statut</th>
          <th scope="col">Date_affecter</th>
            <th scope="col" class="action-header">Actions</th>
          </tr>
        </thead>
        <tbody>
 
        <?php
// Vérifier si le paramètre 'nom' est défini dans l'URL
if (isset($_GET['date_affecter'])) {
    // Décoder la valeur du paramètre 'nom'
    $nom_utilisateur = urldecode($_GET['date_affecter']);

    // Inclure la connexion à la base de données
    include_once "db.php";

    // Préparer une requête SQL sécurisée pour éviter les injections SQL
    $sql = "SELECT * FROM affectation WHERE date_affecter = ?";
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
                    
                    <td><a href="detail.ts.php?nom=<?= urlencode($row['nom_victime']) ?>">changer de statut</a></td>
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
                            
        </tbody>
    </table>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>