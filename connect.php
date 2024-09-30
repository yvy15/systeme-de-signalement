<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once "db.php";

    // Récupération des données
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];
  
    // Préparation de la requête pour vérifier les identifiants
    $stmt = $conn->prepare("SELECT niveau FROM utilisateur WHERE email = ? AND mdp = ?");
    $stmt->bind_param("ss", $email, $mdp);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows <= 0) {
        echo "Aucun compte trouvé')";
    } else {
        // Récupération du statut
        $user = $result->fetch_assoc();
        $niveau = $user['niveau'];

        // Redirection en fonction du statut
        if ($niveau == 'ceso') {
            header("Location: interface3.html");
            exit();
        } elseif ($niveau == 'travailleur social') {
            header("Location: interface4.html");
            exit();
        } elseif ($niveau == 'Delegue departe') {
            header("Location: interface3.html");
            exit();
        } elseif ($niveau == 'Delegue regional') {
            header("Location: interface3.html");
            exit();
        } else {
            echo "Statut inconnu";
        }
    }

    // Fermeture de la déclaration et de la connexion
    $stmt->close();
    $conn->close();
}
?>