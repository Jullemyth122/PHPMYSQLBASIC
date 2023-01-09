<?php
    session_start();
    include_once './includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        img {
            width:100px;
            height:100px;
        }
    </style>
</head>
<body>
    <?php
        $sql = "SELECT * FROM users";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $sqlImg = "SELECT * FROM profileimg WHERE userid = '$id'";
                $resultImg = mysqli_query($conn, $sqlImg);

                while($rowImg = mysqli_fetch_assoc($resultImg)) {
                    echo "<div>";
                        if ($rowImg['status'] == 0) {
                            echo "<img src='./includes/uploads/profile".$id.".jpg?'".mt_rand().">";
                        }
                        else {
                            echo "<img src='./default/default.jpg'>";
                        }
                        echo $row['username'];
                    echo "</div>";
                
                }
            }
        } else {
            echo "There are no users yet!";
        }
    ?>


    <?php
        if (isset($_SESSION['id'])) {
            if ($_SESSION['id'] == 1) {
                echo "You are logged in as user" . $_SESSION['id'];
            }
            echo '
            <form action="./includes/upload.php" method="POST" enctype="multipart/form-data">
                <input type="file" name="file">
                <button type="submit" name="submit">
                    Upload File
                </button>
            </form>
            ';
        } else {
            echo "You are not logged in";
            echo '
                <form action="signup.php" method="post">
                    <input type="text" name="first" placeholder="First Name">
                    <input type="text" name="last" placeholder="Last Name">
                    <input type="text" name="uid" placeholder="Username">
                    <input type="text" name="pwd" placeholder="Password">
                    <button type="submit" name="submitSignup"> Sign Up </button>
                </form>
            ';
        }
    ?>

    <p> Login as user! </p>
    <form action="login.php" method="post">
        <button type="submit" name="submitLogin">Login</button>
    </form>

    <p> Logout as user! </p>
    <form action="logout.php" method="post">
        <button type="submit" name="submitLogout">Logout</button>
    </form>

    
</body>
</html>