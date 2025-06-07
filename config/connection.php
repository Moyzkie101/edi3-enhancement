<?php
    //database connection 
    $host = "localhost";
    $username = "root";
    $password = "Password1";
    $database = "edi";
    $database1 = "telco";

    date_default_timezone_set('Asia/Manila');
    // ini_set('display_errors',1);
    // error_reporting(E_ALL);
    // mysqli_report(MYSQLI_REPORT_ERROR | E_DEPRECATED | E_STRICT);
    // error_reporting(0);

    $conn = mysqli_connect($host, $username, $password, $database);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $conn1 = mysqli_connect($host, $username, $password, $database1);

    if (!$conn1) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>