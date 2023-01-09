<?php
    include '../includes/dbh.inc.php';
    // Connect to MySQL

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Initialize an array to store the data
    $data = array();

    // Get all tables in the database
    $sql = "SHOW TABLES";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Retrieve the data for each table
        while($row = mysqli_fetch_row($result)) {
            $table_name = $row[0];

            // Retrieve the data for this table
            $data_sql = "SELECT * FROM $table_name";
            $data_result = mysqli_query($conn, $data_sql);

            // Add the data for this table to the array
            $table_data = array();
            while($data_row = mysqli_fetch_assoc($data_result)) {
                $table_data[] = $data_row;
            }
            $data[$table_name] = $table_data;
        }
    } else {
        echo "No tables found";
    }

    // Output the data in JSON format
    echo json_encode($data);

    // Close connection
    mysqli_close($conn);
?>