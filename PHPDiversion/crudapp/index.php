<?php
    include 'index.html';

    if (!isset($_GET['create_table'])) {
        # code...
        exit();
    }
    else {
        $signUpCheck = $_GET['create_table'];
        if ($signUpCheck == 'error') {
            echo "<p class='error'> Table Not Created!</p>";
            exit();
        }
        elseif ($signUpCheck =='success') {
            echo "<p class='success'> Table Has Been Created!</p>";
            exit();
        }
    }
?>
