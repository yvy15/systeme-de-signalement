<?php
// Démarrer la session
session_start();

// Vérifier si la requête est de type POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Inclure le fichier de connexion à la base de données
    include_once "db.php";

    // Récupérer et valider les données du formulaire
    $id_signaleur = $_GET['id'];  // Convertir en entier pour éviter les injections
    $note = trim($_POST['note']);                    // Nettoyer la note

    // Vérifier si les champs sont valides
    if (!empty($note) && $id_signaleur > 0) {
        // Préparer la requête SQL pour mettre à jour la note
        $stmt = $conn->prepare("UPDATE signalement SET statut = ? WHERE id = ?");
        $stmt->bind_param("si", $note, $id_signaleur);

        // Exécuter la requête
        if ($stmt->execute()) {
            // Redirection avec un message de succès
            header("Location: interface5.php?message=success");
            exit();
        } else {
            // Redirection avec un message d'erreur en cas d'échec
            header("Location: interface5.php?message=error");
            exit();
        }

        // Fermer la déclaration préparée
        $stmt->close();
    } else {
        // Si les données ne sont pas valides, redirection avec un message d'erreur
        header("Location: interface5.php?message=error");
        exit();
    }
}

// Fermer la connexion à la base de données
$conn->close();
?>
