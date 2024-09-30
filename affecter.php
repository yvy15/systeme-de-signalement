<?php
include_once "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id_signaleur']; // Assurez-vous que c'est bien 'id_signaleur'
    $travailleur = $_POST['travailleur'];
    $ajouter_note = $_POST['note'];
    $date_affectation = date('Y-m-d H:i:s');
    $statut = "Nouveau";

    // Vérifiez si l'ID existe
    $checkSql = "SELECT * FROM signalement WHERE id = ?";
    $checkStmt = mysqli_prepare($conn, $checkSql);
    mysqli_stmt_bind_param($checkStmt, 'i', $id);
    mysqli_stmt_execute($checkStmt);
    $result = mysqli_stmt_get_result($checkStmt);

    if (mysqli_num_rows($result) == 0) {
        echo "Aucun signalement trouvé avec cet ID.";
    } else {
        // Préparez la requête d'insertion
        $sql = "INSERT INTO affectation (nom_victime, date_affecter, statut, nom_travailleur, ajouter_note) 
                SELECT nom_victime, ?, ?, ?, ?
                FROM signalement WHERE id = ?";

        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, 'ssssi', $date_affectation, $statut, $travailleur, $ajouter_note, $id, );

        // Exécution de la requête
        if (mysqli_stmt_execute($stmt)) {
            echo "Affectation réussie!";
        } else {
            echo "Erreur : " . mysqli_stmt_error($stmt);
        }

        mysqli_stmt_close($stmt);
    }

    mysqli_stmt_close($checkStmt);
}

mysqli_close($conn);
?>