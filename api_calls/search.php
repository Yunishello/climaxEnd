<?php 
    include("connect.php");
    $searchItem = "yusuf";

    $sql = "SELECT * FROM `projects` WHERE `title` LIKE '$searchItem%'";
    $res = $conn->query($sql);

    if ($res->num_rows > 0) {
        while ($row = $res->fetch_array()) {
            var_dump($row['id']);
        }
    }else {
        echo header('location:notFound.php');
    }
    $conn->close();
?>