<?php
    include '../includes/dbh.inc.php';

    if (isset($_POST['submit_file'])) {
        $table_name = mysqli_real_escape_string($conn, $_POST['table_name']);
        $name = mysqli_real_escape_string($conn,$_POST['name']);
        $age = mysqli_real_escape_string($conn,$_POST['age']);
        $height = mysqli_real_escape_string($conn,$_POST['height']);

    
        # code...
        $sql = "
        INSERT INTO $table_name( name, age, height)
        VALUES (?,?,?);
        ";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt,$sql)) {
            echo "SQL Error";
        } else {
            mysqli_stmt_bind_param($stmt, "sis", $name, $age, $height);
            mysqli_stmt_execute($stmt);
        }
        // mysqli_query($conn, $sql);
    
        header("Location: ../index.php?create_file=success");
    }

    mysqli_close($conn);

?>