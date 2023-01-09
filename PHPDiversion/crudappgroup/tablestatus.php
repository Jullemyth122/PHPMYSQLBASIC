<?php
    
    if (!isset($_POST['create_table_button'])) {
        # code...
        exit();
    }
    else {
        $signUpCheck = $_POST['create_table_button'];
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