<?php
    $host = 'localhost'; //hostname
    $dbname = 'bd_iot_1'; //database name
    $username = 'root'; //database username
    $password = ''; //database password

    try {

        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        
    } 
    catch(PDOException $e) {
        echo "ERROR ! : " . $e->getMessage();
    }
?>