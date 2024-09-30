<?php
include_once "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id_signaleur']; // Assurez-vous que c'est bien 'id_signaleur'
    $travailleur = $_POST['travailleur'];
    $date_affectation = date('Y-m-d H:i:s');
    $statut = "Nouveau";

    // Vérifiez si l'ID existe
    $checkSql = "SELECT nom_victime FROM signalement WHERE id = ?";
    $checkStmt = mysqli_prepare($conn, $checkSql);
    mysqli_stmt_bind_param($checkStmt, 'i', $id);
    mysqli_stmt_execute($checkStmt);
    $result = mysqli_stmt_get_result($checkStmt);

    if (mysqli_num_rows($result) == 0) {
        echo "Aucun signalement trouvé avec cet ID.";
    } else {
        // Récupérer le nom de la victime
        $row = mysqli_fetch_assoc($result);
        $nom_victime = $row['nom_victime'];

        // Préparez la requête d'insertion
        $sql = "INSERT INTO affectation (nom_victime, date_affecter, nom_travailleur) VALUES (?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, 'sss', $nom_victime, $date_affectation, $travailleur);

        // Exécution de la requête d'insertion
        if (mysqli_stmt_execute($stmt)) {
            echo "Affectation réussie!";
            header("Location:interface3.2.php");
        } else {
            echo "Erreur : " . mysqli_stmt_error($stmt);
        }

        mysqli_stmt_close($stmt);
    }

    mysqli_stmt_close($checkStmt);
}

mysqli_close($conn);
?>