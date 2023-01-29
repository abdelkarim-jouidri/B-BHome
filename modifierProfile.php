<?php
require_once('connDb.php');
if(isset($_POST['modifier'])){
      
   $email=$_POST['email'];
   $mdp=$_POST['mdp'];
   $adresse=$_POST['adresse'];
   $cp=$_POST['cp'];
   $ville=$_POST['ville'];
   $tel=$_POST['tel'];

//   echo $email;
   $stmt = $conn->prepare("
   UPDATE utilisateur SET
    `mdp`=?,`adresse`=?,
   `cp`=?,`ville`=?,
   `telephone`=? WHERE `adresse_mail`=? ");

  $stmt ->execute([$mdp,$adresse,$cp,$ville,$tel,$email]);
    
   header("Location: azize.html");



}


?>