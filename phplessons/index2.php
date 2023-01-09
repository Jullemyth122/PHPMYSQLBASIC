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
        $data = "Member";
        // Created a template
        $sql = "SELECT * FROM users WHERE user_uid = ?; ";
        // Create a prepared statement
        $stmt = mysqli_stmt_init($conn);

        if (
            !mysqli_stmt_prepare($stmt, $sql)
        ) {
            echo "SQL Failed to prepare statement";
            # code...
        } else {
            // Bind variables to the prepared statement
            mysqli_stmt_bind_param($stmt, "s", $data);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            while ($user = mysqli_fetch_array($result)) {
                echo 
                $user['user_uid']. "<br/>";
            }
        }
    ?>

</body>
</html>