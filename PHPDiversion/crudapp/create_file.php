<?php
    include 'dbh.inc.php';

    if (isset($_POST['submit_file'])) {
        $filename = mysqli_real_escape_string($conn,$_POST['Filename']);
        $content = mysqli_real_escape_string($conn,$_POST['Content']);
        $owner = mysqli_real_escape_string($conn,$_POST['Owner']);
        $uid = mysqli_real_escape_string($conn,$_POST['UID']);
    
        # code...
        $sql = "
        INSERT INTO Files( Filename, Content, Owner, UID)
        VALUES (?,?,?,?);
        ";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt,$sql)) {
            echo "SQL Error";
        } else {
            mysqli_stmt_bind_param($stmt, "sssd",$filename, $content, $owner, $uid);
            mysqli_stmt_execute($stmt);
        }
        // mysqli_query($conn, $sql);
    
        header("Location: index.php?create_file=success");
    }

?>