<?php
    // session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li>
            <a href="startsession.php">
            Home
            </a>
        </li>
        <li>
            <a href="contact.php">
                Contact
            </a>
        </li>
    </ul>
    <?php

        // $_SESSION['username'] = 'dani91313a';
        // echo $_SESSION['username'];

        if(!isset($_SESSION['username'])) {
            echo "You are not logged in!";
        } else {
            echo "You are logged in!";
        }

    ?>
</body>
</html>