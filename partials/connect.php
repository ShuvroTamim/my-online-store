<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $dbname = "mystore";

    // Create Connection
    $conn = new mysqli($host, $user, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // else {
    //     echo "Connected successfully";
    // }
?>