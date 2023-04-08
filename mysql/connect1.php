<?php 
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "fashion_mylishop.sql";

    // Create connection
    $conn = mysqli_connect($host, $user, $password, $database);
    mysqli_set_charset($conn, 'UTF8');

    // Check connect
    if (!$conn){
        die("Connection failed: ". mysqli_connect_error());
    }
?>