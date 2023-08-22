<?php
 if ($_SERVER["REQUEST_METHOD"] =="POST") {
    $id = $_POST["id"];
    $event_title = $_POST["event_title"];
    $event_loction = $_POST["event_loction"];
    $event_description = $_POST["event_description"];

    
        require_once "dbconnection.php";
        $query = "UPDATE booking SET event_title = ?, event_loction =?, event_description =? WHERE id =?";

        $stmt = mysqli_prepare($connect, $query);
        mysqli_stmt_bind_param($stmt, "sssi", $event_title, $event_loction, $event_description, $id);
        mysqli_stmt_execute($stmt);

        echo "submit successfull";

  
 }
?>