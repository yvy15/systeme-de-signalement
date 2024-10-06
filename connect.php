<?php
// Démarrer la session
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once "db.php";

    // Récupérer et valider les données d'entrée
    $email = trim($_POST['email']);
    $mdp = trim($_POST['mdp']);

    // Préparation de la requête pour vérifier les identifiants
    $stmt = $conn->prepare("SELECT email, nom, niveau FROM utilisateur WHERE email = ? AND mdp = ?");
    $stmt->bind_param("ss", $email, $mdp);
    $stmt->execute();
    $result = $stmt->get_result();

    // Vérification du résultat
    if ($result->num_rows <= 0) {
        echo "Aucun compte trouvé";
    } else {
        // Récupérer les informations de l'utilisateur
        $user = $result->fetch_assoc();
        $_SESSION['user_id'] = $user['email'];   // Utiliser l'email pour l'ID utilisateur
        $_SESSION['user_name'] = $user['nom'];   // Récupérer le nom d'utilisateur
        $niveau = $user['niveau'];               // Niveau de l'utilisateur

        // Redirection en fonction du niveau de l'utilisateur
        switch ($niveau) {
            case 'ceso':
            case 'Delegue departe':
            case 'Delegue regional':
                header("Location: interface3.php");
                break;
            case 'travailleur social':
                header("Location: interface4.php");
                break;
            default:
                echo "Statut inconnu";
                break;
        }
        exit();
    }

    // Fermer la requête et la connexion
    $stmt->close();
    $conn->close();
}
?>
