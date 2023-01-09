<?php
    include '../includes/dbh.inc.php';

    if (isset($_POST['create_table_button'])) {
        $table_name = mysqli_real_escape_string($conn, $_POST['table_name']);

        // SQL query to create table
        $sql = "
        CREATE TABLE $table_name (
            id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(30) NOT NULL,
            age INT(11) NOT NULL,
            height VARCHAR(30) NOT NULL
        )";

        $result = "";
        if (mysqli_query($conn, $sql)) {
            $result = "success";
            // echo $result;
        } else {
            $result = "error";
            echo "Error creating table: " . mysqli_error($conn);
        }

        header("Location: ../index.php?create_table=$result");
    }
    
    // Close connection
    mysqli_close($conn);

?>