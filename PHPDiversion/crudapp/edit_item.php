<?php
    include 'dbh.inc.php';
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Select all items from the users table
    // if (isset($_POST['submit_file'])) {
    if (isset($_POST['id']) && isset($_POST['Filename']) && isset($_POST['Content']) && isset($_POST['Owner']) && isset($_POST['UID'])) {
        // Update item in the users table
        $id = $_POST['id'];
        $sql = "
        UPDATE files SET 
        Filename = '" . $_POST['Filename'] . "', 
        Content = '" . $_POST['Content'] . "', 
        Owner = '" . $_POST['Owner'] . "', 
        UID = '" . $_POST['UID'] . "' 
        WHERE id = " . $_POST['id'];
    
        if (mysqli_query($conn, $sql)) {
            echo "Item updated successfully";
        } else {
            echo "Error updating item: " . mysqli_error($conn);
        }            
        header("Location: index.php?update_file=success");
    } else {
        header("Location: index.php?update_file=fail");
    }

    // if (isset($_POST['id']) && isset($_POST['Filename']) && isset($_POST['Content']) && isset($_POST['Owner']) && isset($_POST['UID'])) {
    // }
    

    // Close connection
    mysqli_close($conn);
?>