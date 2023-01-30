<?php
require_once('connDb.php');

    if(isset($_POST['temp_value']))  {
        $temp=$_POST['temp_value'];
           $stmt = $conn->prepare("
           UPDATE `piece` SET 
           `t_consigne`=? WHERE nom_piece=?");
          $stmt ->execute([$temp,'chambre']);
    
    }

    if(isset($_POST['humidite_value'])){

        $humidite=$_POST['humidite_value'];
        $stmt = $conn->prepare("
        UPDATE `piece` SET 
        `h_consigne`=? WHERE nom_piece=?");
       $stmt ->execute([$humidite,'chambre']);

    }
    if(isset($_POST['luminosite_value']))  {
        $luminosite=$_POST['luminosite_value'];
           $stmt = $conn->prepare("
           UPDATE `piece` SET 
           `l_consigne`=? WHERE nom_piece=?");
          $stmt ->execute([$luminosite,'chambre']);
    
    }
    if(isset($_POST['vmc_value'])){
        $vmc=$_POST['vmc_value'];
        $stmt = $conn->prepare("
        UPDATE `etat` SET 
        `etat_vmc`=? WHERE nom_piece=?");
       $stmt ->execute([$vmc,'chambre']);

    }
    if(isset($_POST['volet_value'])){
        $volet=$_POST['volet_value'];
        $stmt = $conn->prepare("
        UPDATE `etat` SET 
        `etat_volet`=? WHERE nom_piece=?");
       $stmt ->execute([$volet,'chambre']);

    }
    //etat
// check 1
    if(isset($_POST['etat_checked1'])){

    $etat_checked1 = $_POST['etat_checked1'];
    
   if($etat_checked1=='true'){
        echo 1;
   
    $stmt = $conn->prepare("
    UPDATE `etat` SET 
    `etat_chauffage`=? WHERE nom_piece=?");
   $stmt ->execute([1,'chambre']);
   }
  else {
        echo 0;
    $stmt = $conn->prepare("
    UPDATE `etat` SET 
    `etat_chauffage`=? WHERE nom_piece=?");
   $stmt ->execute([0,'chambre']);
   
   }

    }
    // check2
    if(isset($_POST['etat_checked2'])){

        $etat_checked2 = $_POST['etat_checked2'];
        
       if($etat_checked2=='true'){
            
       
        $stmt = $conn->prepare("
        UPDATE `etat` SET 
        `etat_eclairage`=? WHERE nom_piece=?");
       $stmt ->execute([1,'chambre']);
       }
      else {
            
        $stmt = $conn->prepare("
        UPDATE `etat` SET 
        `etat_eclairage`=? WHERE nom_piece=?");
       $stmt ->execute([0,'chambre']);
       
       }
    
        }
 
 // check3
 if(isset($_POST['etat_checked3'])){

    $etat_checked3 = $_POST['etat_checked3'];
    
   if($etat_checked3=='true'){
        
   
    $stmt = $conn->prepare("
    UPDATE `piece` SET 
    `t_consigne`=? WHERE nom_piece=?");
   $stmt ->execute([12,'chambre']);


   $stmt2 = $conn->prepare("
   UPDATE `etat` SET 
   `etat_volet`=? WHERE nom_piece=?");
  $stmt2 ->execute([100,'chambre']);

  $stmt3 = $conn->prepare("
  UPDATE `etat` SET 
  `etat_absence`=? WHERE nom_piece=?");
 $stmt3->execute([1,'chambre']);

       }else{
        $stmt4 = $conn->prepare("
        UPDATE `etat` SET 
        `etat_absence`=? WHERE nom_piece=?");
       $stmt4->execute([0,'chambre']);
       }

       


    }


?>
