<?php


    $servername = "db";
    $username = "root";
    $password = "password";
    $database = "data";

    $db = mysqli_connect($servername, $username, $password, $database);
        if ($db->connect_error) {
            die("Connexion non réussie, " . $db->connect_error);
        }
    echo "Connecté";
    return $db;


?>