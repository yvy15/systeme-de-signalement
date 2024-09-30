<?php
// Connexion à la base de données
$host = 'localhost'; // Nom de l'hôte
$dbname = 'systsignalement'; // Nom de la base de données
$username = 'root'; // Nom d'utilisateur
$password = ''; // Mot de passe

// Création de la connexion
$conn = new mysqli($host, $username, $password, $dbname);

// Vérification de la connexion
if ($conn->connect_error) {
    die("Échec de la connexion : " . $conn->connect_error);
}

try {
    // Récupération des données du formulaire
    $nomSignaleur = $_POST['nom-signaleur'] ?? '';
    $emailSignaleur = $_POST['email-signaleur'] ?? '';
    $telephoneSignaleur = $_POST['telephone-signaleur'] ?? '';
    $nomVictime = $_POST['nom-victime'] ?? '';
    $ageApparent = $_POST['age-apparent'] ?? '';
    $dateHeure = $_POST['date-heure'] ?? '';
    $autre = $_POST['description-autre'] ?? '';
    $sexe = $_POST['sexe'] ?? '';
    $lieu = $_POST['lieu'] ?? '';
    $lieu_dit = $_POST['lieu-dit'] ?? '';

    // Récupération des types de sévices
    $pservice1 = $_POST['psevices1'] ?? null;
    $pservice2 = $_POST['psevices2'] ?? null;
    $pservice3 = $_POST['psevices3'] ?? null;

    $vservice1 = $_POST['vsevices1'] ?? null;
    $vservice2 = $_POST['vsevices2'] ?? null;
    $vservice3 = $_POST['vsevices3'] ?? null;

    $servicep1 = $_POST['sevicesp1'] ?? null;
    $servicep2 = $_POST['sevicesp2'] ?? null;
    $servicep3 = $_POST['sevicesp3'] ?? null;

    // Insertion des informations dans la table signaleur
    $stmtSignaleur = $conn->prepare("INSERT INTO signaleur (nom_signaleur, email, telephone) VALUES (?, ?, ?)");
    $stmtSignaleur->bind_param("sss", $nomSignaleur, $emailSignaleur, $telephoneSignaleur);
    $stmtSignaleur->execute();

    // Récupération de l'ID du signaleur
    $id_signaleur = $conn->insert_id;

    // Insertion des informations dans la table victime
    $stmtVictime = $conn->prepare("INSERT INTO signalement (nom_victime, age_apparent, date_heure, sexe, lieu, lieu_dit , id_signaleur) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmtVictime->bind_param("ssssssi", $nomVictime, $ageApparent, $dateHeure, $sexe, $lieu, $lieu_dit , $id_signaleur);
    $stmtVictime->execute();

    // Récupération de l'ID de la victime
    $id = $conn->insert_id;

    // Insertion des types de sévices dans la table sevices
    $stmtSevices = $conn->prepare("INSERT INTO sevices_cas (sevices_physiques1, sevices_physiques2, sevices_physiques3, sevices_verbaux1, sevices_verbaux2, sevices_verbaux3, sevices_psychologique1, sevices_psychologique2, sevices_psychologique3, autres, cas_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmtSevices->bind_param("ssssssssssi", $pservice1, $pservice2, $pservice3, $vservice1, $vservice2, $vservice3, $servicep1, $servicep2, $servicep3, $autre, $id_signaleur);
    $stmtSevices->execute();

    echo "Les informations ont été enregistrées avec succès.";
} catch (Exception $e) {
    echo "Erreur : " . $e->getMessage();
}

// Fermeture de la connexion
$conn->close();
?>