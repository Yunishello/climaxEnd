<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "climaxDB";
$conn = new mysqli($servername,$username,$password,$db);
if($conn == false){
    $err = "Connection not established!";
    echo($err);
};
?>