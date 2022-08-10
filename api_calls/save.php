<?php
    include('connect.php');
    // Collecting data

    if ($_SERVER['REQUEST_METHOD'] == 'POST' || 'post') {
        if (
            empty($_POST['title']) &&
            empty($_POST['textContent']) &&
            empty($_POST['intro'])
        ) {
            echo "There is an empty field!";
        }else {
           // File Handling
            $title = $_POST['title'];
            $textContent = $_POST['textContent'];
            $intro = $_POST['intro'];
            // SQL quering
            $sql = "INSERT INTO `projects` (`title`, `textContent`, `introduction`) VALUE ('$title', '$textContent', '$intro')";
            if ($conn->query($sql) == true) {
                session_start();
                $_SESSION['message'] = 'save';
                echo header("location:../index.php");
            }else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    }else {
        echo "please use post method";
    };

    $conn->close();
?>