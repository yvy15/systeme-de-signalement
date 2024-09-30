<?php 
//connexion a la base des donnees 
$conn=mysqli_connect ("localhost", "root","","systsignalement");
if(!$conn){
    echo "erreur de connexion";
}else{
    //echo "connexion reussie";
}
?>