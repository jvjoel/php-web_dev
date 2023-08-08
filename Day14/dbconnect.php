<?php
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $dbname = 'users';
    $connect = mysqli_connect($host, $user, $password, $dbname);

    if (!$connect) {
        die("Connection failed: " . mysqli_connect_error());
    }?>