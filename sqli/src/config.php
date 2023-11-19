<?php
    session_start();
    $conn = mysqli_connect("db", "root", "", "ehcExpertise");
    if ($conn->connect_error) {
        die("Connnection failed: " . $conn->connect_error);
    }
?>
