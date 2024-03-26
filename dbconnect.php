<?php
    $servername = "localhost";
    $database = "studentid";
    $username = "root";
    $password = "";

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
    echo "เชื่อมต่อสำเร็จ";
?>