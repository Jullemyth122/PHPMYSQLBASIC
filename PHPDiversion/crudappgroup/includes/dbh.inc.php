<?php
    
    $dbServername = "localhost:3307";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "crudgroup";
    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword,$dbName);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>