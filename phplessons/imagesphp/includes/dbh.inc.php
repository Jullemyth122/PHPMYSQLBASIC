<?php

    $dbServername = "localhost:3307";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "profileuser";
    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword,$dbName);

    if (!$conn) {
        die("Not connected: ". mysqli_connect_error());
    }
    
?>