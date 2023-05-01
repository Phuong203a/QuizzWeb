<?php
    $servername = "localhost";
    // Create connection
    $conn = new mysqli("localhost", "root","", "quiz_web");
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $conn->set_charset("utf8")
    // echo "Connected successfully";
?>