<?php
    include 'dbh.inc.php';
    // echo $conn;
    if (isset($_POST['create_table_button'])) {
    // Connect to MySQL
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Create table
        $sql = "
        CREATE TABLE Files( 
            id int(11) AUTO_INCREMENT PRIMARY KEY not NULL, 
            Filename varchar(256) not NULL, 
            Content varchar(256) not NULL, 
            Owner varchar(256) not NULL, 
            UID varchar(256) not NULL
        );";
        // INSERT INTO users( Filename, Content, Owner, UID, user_pwd)
        // VALUES ('Mythical','Xenon','mythxenon12@gmail.com','Member','test123');
        $result = "";
        if (mysqli_query($conn, $sql)) {
            $result = "success";
            echo $result;
        } else {
            $result = "error";
            echo "Error creating table: " . mysqli_error($conn);
        }

        // Close connection
        mysqli_close($conn);

        header("Location: index.php?create_table=$result");
    }

?>