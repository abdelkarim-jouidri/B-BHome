<?php
require_once('connDb.php');


  if(isset($_POST['ajouter'])){

    $nom_piece = $_POST['nom-piece'];
    $t_consigne = $_POST['t-consigne'];
    $l_consigne = $_POST['l-consigne'];
    $h_consigne = $_POST['h-consigne'];

    $email = "";


    $stmt = $conn->prepare(" INSERT INTO piece VALUES (?,?,?,?,?) ");
 
   $stmt ->execute([$nom_piece,$t_consigne,$l_consigne,$h_consigne,$email]);
     
    header("Location: ajoutePiece.html");

  }


?>