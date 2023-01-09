<?php
    include 'dbh.inc.php';
    // Connect to MySQL

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Select all items from the users table
    $sql = "SELECT * FROM files";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Output the items in a table
        while($row = mysqli_fetch_assoc($result)) {
            echo "
            <div class='items' data-id=". $row["id"]. ">
            <div class='item'>" . $row["id"]. "</div>
            <div class='item'>" . $row["Filename"]. "</div>
            <div class='item'>" . $row["Content"]. "</div>
            <div class='item'>" . $row["Owner"]. "</div>
            <div class='item'>" . $row["UID"]. "</div>
            <button onclick='deleteItem(" . $row["id"]. ")'>Delete</button>
            <button onclick='editItem(" . $row["id"] . ", \"" . $row["Filename"] . "\", \"" . $row["Content"] . "\", \"" . $row["Owner"] . "\", \"" . $row["UID"] . "\")'>Edit</button>
            </div>
            </div>"
            ;
        }
    } else {
        echo "<div><div colspan='5'>0 results</div></div>";
    }

    // Close connection
    mysqli_close($conn);
?>