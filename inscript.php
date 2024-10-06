<?php
session_start();
include_once "db.php";
// Vérifie si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] =="POST"){

    // Récupérer les valeurs du formulaire et les sécuriser
    $nom = $_POST['nom'];
    $prenom =$_POST['prenom']; 
    $email = $_POST['email'];
    $mdp =$_POST['password'];
    $niveau =$_POST['niveau'];
    $cmdp =$_POST['confirmer-password'];

 // Vérification du compte
 $stmt =$conn->prepare("SELECT email FROM utilisateur WHERE email = ?");
 $stmt->bind_param("s", $email);
 $stmt->execute();
 $result = $stmt->get_result();

    // Vérifier si les deux mots de passe correspondent
    if ($mdp !== $cmdp) {
        echo "Les mots de passe ne correspondent pas. Veuillez réessayer.";
        exit;  // Arrêter l'exécution si les mots de passe ne correspondent pas
    }
    else {
        if ($result->num_rows <= 0) {
            // Insertion dans la base de données
            $stmt = $conn->prepare("INSERT INTO utilisateur (nom, prenom, niveau, email, mdp) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("sssss", $nom, $prenom, $niveau, $email, $mdp);
            $user=$stmt->execute();
            if ($user) {
        $_SESSION['user_id']=$email;
        $_SESSION['user_name']=$nom;
                if($niveau=='CESO'){
                    header("Loation:interface3.php");
                }
                elseif($niveau=='travailleur social'){
                    header("Location:interface4.php");
                }
                elseif($niveau=='Delegue departemental'){
                    header("Location:interface3.php");
                }
                elseif($niveau=='Delegue regional'){
                    header("Location:interface3.php");
                }
            } else {
                echo "Erreur lors de l\'enregistrement";
            }
        } else {
            echo "Ce compte existe déjà!";
        }
    }
    
    // Fermeture de la connexion
    $stmt->close();
    $conn->close();
        }

?>
