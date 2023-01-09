<?php
    include 'dbh.inc.php';

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        // Delete item from the users table
        $sql = "DELETE FROM files WHERE id = " . $id;

        if (mysqli_query($conn, $sql)) {
            echo "Item deleted successfully";
        } else {
            echo "Error deleting item: " . mysqli_error($conn);
        }

        header("Location: index.php?delete_file=success&id=$id");
    }

    // Close connection
    mysqli_close($conn);

?>