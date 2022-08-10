<?php
    include('connect.php');

    $sql = "SELECT * FROM `projects`";

    $res = $conn->query($sql);

    if ($res->num_rows > 0) {
        while ($row = $res->fetch_assoc()) {
            // session_start();
            $_SESSION['id'] = $row['id'];
            $_SESSION['title'] = $row['title'];
            $_SESSION['intro'] = $row['introduction'];
            $_SESSION['textContent'] = $row['textContent'];
            // session_destroy();
        }
    }else {
        echo header("location:notFound.php");
    }
    $conn->close();
?>