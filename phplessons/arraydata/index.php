<?php
    include_once 'dbh.inc.php';
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
        $sql = "SELECT * FROM data";

        $result = mysqli_query($conn,$sql);
        $datas = array();
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $datas[] = $row;
            }

        }

        // foreach($datas[0] as $data) {
        //     echo $data;
        // }

        foreach($datas as $data) {
            echo $data['text']. " ";
        }


    ?>

</body>
</html>