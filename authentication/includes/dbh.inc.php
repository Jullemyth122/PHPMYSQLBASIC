<?php
    $dbServername = "localhost:3307";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "loginsystemtut";
    $conn =  mysqli_connect($dbServername, $dbUsername, $dbPassword,$dbName);

    if (!$conn) {
        die("Not connected: ". mysqli_connect_error());
    }
?>