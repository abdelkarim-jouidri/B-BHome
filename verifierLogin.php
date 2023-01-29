<?php 
require_once ('connDb.php');
session_start();

 if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['pswd'];


    $stmt = $conn->prepare("SELECT * FROM utilisateur WHERE adresse_mail = ? and mdp=? ");

     $stmt ->execute([$email,$password]);

     $user=$stmt->fetchAll();

     if (count($user) > 0) {

        $_SESSION['login_success'] = $user[0];
          
        header("Location: index.html");
    } else {
        header("Location: login.html");
    }
 }

?>
