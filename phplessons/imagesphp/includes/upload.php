<?php
    session_start();
    include_once 'dbh.inc.php';
    $id = $_SESSION['id'];

    if (isset($_POST['submit'])) {
        $file = $_FILES['file'];
        print_r($file);
        $filename = $_FILES['file']['name'];
        $filesize = $_FILES['file']['size'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $fileType = $_FILES['file']['type'];
        $filePath = $_FILES['file']['full_path'];
        $fileError = $_FILES['file']['error'];
        echo "<br>";

        $fileExt = explode(".", $filename);
        $fileActualExt = strtolower(end($fileExt));

        $allowed = array('jpg','jpeg','png','gif');

        if (!in_array($fileActualExt, $allowed)) {
            echo "<br>";
            echo "The file type is not allowed.<br>";
            echo "<br>";
            echo $fileActualExt. "<br>";
            echo "<br>";
        }
        else {
            if ($fileError == 0) {
                if ($filesize < 10000000) {
                    # code...
                    $fileNameNew = "profile".$id.".".$fileActualExt;

                    if (!is_dir('uploads')) {
                    mkdir('uploads', 0700, true);
                    }

                    $fileDestination = "uploads/".$fileNameNew;
                    move_uploaded_file($fileTmpName,$fileDestination);
                    // echo "Upload file!";
                    $sql = "UPDATE profileimg SET status = 0 WHERE userid = '$id';";
                    $result = mysqli_query($conn,$sql);
                    header("Location: ../index.php?upload=success");
                } else {
                    echo "Your file is too big!";
                }
                # code...
            } 
            else {
                echo "There was an error uploading in your file";
            }
        }

    }
?>