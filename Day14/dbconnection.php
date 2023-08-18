<?php
    $host = "localhost";
    $user = "root";
    $password ="";
    $dbname = "events";
    $connect = mysqli_connect($host, $user, $password, $dbname);

   
    if (!$connect) {
      die("connection failed: " . mysqli_connect());
    }

   echo "Connected successfully";


?>