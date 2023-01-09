<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2> Signup </h2>
        <form action="signup.inc.php" method="POST">
            <?php
                if (isset($_GET['first'])) {
                    # code...
                    $first = $_GET['first'];
                    echo '<input type="text" name="first" placeholder = "Firstname" value="'.$first.'">';
                } else {
                    echo '<input type="text" name="first" placeholder = "Firstname">';
                }
                
                if (isset($_GET['last'])) {
                    # code...
                    $last = $_GET['last'];
                    echo '<input type="text" name="last" placeholder = "Lastname" value="'.$last.'">';
                } else {
                    echo '<input type="text" name="last" placeholder = "Lastname">';
                }

                if (isset($_GET['email'])) {
                    # code...
                    $email = $_GET['email'];
                    echo '<input type="text" name="email" placeholder = "E-mail" value="'.$email.'">';
                } else {
                    echo '<input type="text" name="email" placeholder = "E-mail">';
                }

                if (isset($_GET['uid'])) {
                    # code...
                    $uid = $_GET['uid'];
                    echo '<input type="text" name="uid" placeholder = "Username" value="'.$uid.'">';
                } else {
                    echo '<input type="text" name="uid" placeholder = "Username">';
                }

                ?>
            <input type="password" name="pwd" placeholder = "Password">
            <button type="submit" name="submit"> Sign Up </button>
        </form>
    </div>
    <?php
        // $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

        // if (strpos($fullUrl, 'signup=empty') == true) {
        //     echo "<p class='error'> You did not fill in all fields!</p>";
        //     exit();
        //     // $fullUrl = substr($fullUrl, 0, strpos($fullUrl, '?'));
        // }
        // elseif (strpos($fullUrl, 'signup=invalidchar') == true) {
        //     echo "<p class='error'> You used invalid characters!</p>";
        //     exit();
        //     // $fullUrl = substr($fullUrl, 0, strpos($fullUrl, '?'));
        // }
        // elseif (strpos($fullUrl, 'signup=invalidemail') == true) {
        //     echo "<p class='error'> You used an invalid e-mail!</p>";
        //     exit();
        //     // $fullUrl = substr($fullUrl, 0, strpos($fullUrl, '?'));
        // }
        // elseif (strpos($fullUrl, 'signup=success') == true) {
        //     echo "<p class='success'> You have been signup!</p>";
        //     exit();
        //     // $fullUrl = substr($fullUrl, 0, strpos($fullUrl, '?'));
        // }
        if (!isset($_GET['signup'])) {
            # code...
            exit();
        }
        else {
            $signUpCheck = $_GET['signup'];
            if ($signUpCheck == 'empty') {
                echo "<p class='error'> You did not fill in all fields!</p>";
                exit();
            }
            elseif ($signUpCheck == 'invalidchar') {
                echo "<p class='error'> You used invalid characters!</p>";
                exit();
            }
            elseif ($signUpCheck == 'invalidemail') {
                echo "<p class='error'> You used an invalid e-mail!</p>";
                exit();
            }
            elseif ($signUpCheck =='success') {
                echo "<p class='success'> You have been signup!</p>";
                exit();
            }
        }
    ?>
</body>
</html>