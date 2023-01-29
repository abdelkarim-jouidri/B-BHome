<?php
    $host = 'localhost'; //hostname
    $dbname = 'db_home'; //database name
    $username = 'root'; //database username
    $password = ''; //database password

    try {
        
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        
    } 
    catch(PDOException $e) {
        echo "ERROR ! : " . $e->getMessage();
    }
?>