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
<?php
$message = '';  // Initialisation du message

if (isset($_GET['message'])) {
    if ($_GET['message'] == 'success') {
        $message = '<div class="alert alert-success">La note a été ajoutée avec succès.</div>';
        echo $message;
    } elseif ($_GET['message'] == 'error') {
        $message = '<div class="alert alert-danger">Erreur lors de l\'ajout de la note.</div>';
        echo $message;
    }
}
?>
<div>
    <?= $message; ?>
</div>

    <h1 class="text-center mb-4">Fiche de Signalement</h1>
    <table class="table table-striped table-bordered">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nom</th>
            <th scope="col">Âge</th>
            <th scope="col">Date</th>
            <th scope="col">Sexe</th>
            <th scope="col">Lieu</th>
            <th scope="col" class="action-header">Actions</th>
          </tr>
        </thead>
        <tbody>
 
            <?php
            include_once "db.php";
            $id=$_GET['id'];
            $req = mysqli_query($conn, "SELECT * FROM signalement WHERE id = $id");
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
                        <td><?=$row['age_apparent']?></td>
                        <td><?=$row['date_heure']?></td>
                        <td><?=$row['sexe']?></td>
                        <td><?=$row['lieu']?></td>
                        <td class="action-cell">
                            <form action="affecter.php" method="POST">
                                <select name="travailleur" class="form-select mb-2" required>
                                    <option value="">Choisissez un travailleur social</option>
                                    <?php
                                    if (mysqli_num_rows($travailleursReq) == 0) {
                                        echo "<option value=''>Aucun utilisateur</option>";
                                    } else {
                                        while ($travailleur = mysqli_fetch_assoc($travailleursReq)) {
                                            ?>
                                            <option value="<?=$travailleur['nom']?>"><?=$travailleur['nom']?></option>
                                            <?php
                                        }
                                    }
                                    ?>
                                </select>
                                <input type="hidden" name="id_signaleur" value="<?=$row['id']?>">
                                <button type="submit" class="btn btn-success">Affecter</button>
                            </form>
                            <!-- Ajouter un champ pour la note -->
                            <form action="ajouter_note.php" method="POST" class="note-input">
    <input type="hidden" name="id_signaleur" value="<?= htmlspecialchars($row['id']); ?>">
    <input type="text" name="note" placeholder="Ajouter une note" class="form-control" required>
    <button type="submit" class="btn btn-primary mt-2">Changer de statut</button>
</form>

                        </td>
                    </tr>
                    <?php
                }
            }
            ?>
        </tbody>
    </table>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>