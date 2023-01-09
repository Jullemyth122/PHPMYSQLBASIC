<?php
    include 'dbh.inc.php';


    // $name = $_POST['first'];
    // $surname = $_POST['last'];
    // $email = $_POST['email'];
    // $username = $_POST['uid'];
    // $password = $_POST['password'];
    $name = mysqli_real_escape_string($conn,$_POST['first']);
    $surname = mysqli_real_escape_string($conn,$_POST['last']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $username = mysqli_real_escape_string($conn,$_POST['uid']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);

        # code...
    $sql = "INSERT INTO users( user_first, user_last, user_email, user_uid, user_pwd)
    VALUES (?, ?, ?, ?, ?); ";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt,$sql)) {
        echo "SQL Error";
    } else {
        mysqli_stmt_bind_param($stmt, "sssss",$name, $surname, $email, $username, $password);
        mysqli_stmt_execute($stmt);
    }
    // mysqli_query($conn, $sql);

    header("Location: ../index.php ?signup=success");

?>