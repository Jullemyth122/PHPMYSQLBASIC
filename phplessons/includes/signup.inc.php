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

    if (isset($name) && isset($email) && isset($username) && isset($username) && isset($password)) {
        # code...
        $sql = "INSERT INTO users( user_first, user_last, user_email, user_uid, user_pwd)
        VALUES ('$name','$surname','$email','$username','$password');";
        mysqli_query($conn, $sql);
    } else {
        echo "Error: Please input all input fields";
    }

    header("Location: ../index.php ?signup=success");

?>