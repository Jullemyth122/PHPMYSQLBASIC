<?php
    include 'includes/dbh.inc.php';
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
    <?php
        $sql = "SELECT * FROM users; ";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
            while ($user = mysqli_fetch_array($result)) {
                echo $user["user_id"] .$user['user_first']  . 
                $user['user_last'] .
                $user['user_email'].
                $user['user_uid'].
                $user['user_pwd']. "<br/>";
            }
        }
    ?>

</body>
</html>