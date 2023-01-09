<?php
    // include 'includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <form action="includes/signup2.inc.php" method="POST">
    <!-- <form action="includes/signup.inc.php" method="POST"> -->
    <!-- <form action="includes" method="GET"> -->
        <input type="text" name="first" placeholder = "Firstname">
        <br>
        <input type="text" name="last" placeholder = "Lastname">
        <br>
        <input type="text" name="email" placeholder = "E-mail">
        <br>
        <input type="text" name="uid" placeholder = "Username">
        <br>
        <input type="text" name="password" placeholder = "Password">
        <br>
        <button type="submit"> Sign Up </button>
    </form>

</head>
<body>

</body>
</html>