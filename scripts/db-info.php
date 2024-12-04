<?php
    $host = '138.197.17.168';
    $username = 'cindyleo_cindy';
    $password = 'L00pyle245';
    $dbname = 'cindyleo_project';

    $conn = new mysqli($host, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>