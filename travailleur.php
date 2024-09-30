

<div class="content">
    <h2>Tableau de Bord des Travailleurs Sociaux</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID_travailleur</th>
                <th>Nom_formulaire</th>
                <th>Statut</th>
                <th>Date_affecter</th>
                <th>Heure</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Inclure le fichier de connexion
            include 'db.php';

            // Requête pour récupérer les informations nécessaires
            $sql = "
                SELECT 
                    t.id AS id_travailleur,
                    s.nom_victime AS nomformulaire, 
                    s.statut AS status, 
                    s.date_heure 
                FROM 
                    travailleur AS t 
                JOIN 
                    signalement AS s ON t.id = s.id_travailleur"; // Ajustez selon votre structure

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Afficher les données de chaque ligne
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['id_travailleur']}</td>
                            <td>Cas de {$row['nom_victime']}</td>
                            <td>{$row['statut_signalement']}</td>
                            <td>{$row['date_heure']}</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='5'>Aucun signalement trouvé</td></tr>";
            }
            $conn->close();
            ?>
        </tbody>
    </table>
</div>