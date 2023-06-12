
<?php

    $serverName = 'localhost';
    $user = 'root';
    $password = '';
    $dbName = 'project';

    $conn = new mysqli($serverName, $user, $password, $dbName);

    if ($conn->connect_error)
    {
        die("connection failed".$conn->connect_error);
    }

    return $conn;
?>