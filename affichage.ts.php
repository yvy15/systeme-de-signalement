<?php
// Inclure la connexion à la base de données
include 'connexion.php';

// Récupérer les données de la table affectation
$sql = "SELECT a.*, t.nom AS nom_travailleur FROM affectation a JOIN travailleurs t ON a.id_travailleur = t.id";
$result = $conn->query($sql);

// Stocker les données dans un tableau
$affectations = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $affectations[] = $row;
    }
}

$conn->close();
?>