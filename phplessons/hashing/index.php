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
        // echo "tite101";
        // echo "<br>";
        // echo password_hash("tite101", PASSWORD_DEFAULT);

        $input = "tite101";
        $hashedPwdInDb = password_hash("tite101", PASSWORD_DEFAULT);

        echo password_verify($input, $hashedPwdInDb);


    ?>
</body>
</html>