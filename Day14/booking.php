<?php 
    if ($_SERVER["REQUEST_METHOD"] =="POST") {
    $title= $_POST["event_title"];
    $location = $_POST["event_location"];
    $description = $_POST["event_description"];

        require_once 'dbconnection.php';
        $query = "INSERT INTO booking (event_title, event_location, event_description) VALUES (?, ?, ?)";


        $stmt = mysqli_prepare($connect, $query);
        if (!$stmt) {
            die("Perpare failed: " .mysqli_error($connect));
        }
        
        mysqli_stmt_bind_param($stmt, "sss", $title, $location, $description);
        $title= $_POST["event_title"];
        $location = $_POST["event_location"];
        $descripation = $_POST["event_description"];

        if(mysqli_stmt_execute($stmt)) {
            header("Location:  info.php");
        }

        else {
            die("Execute failed: " . mysqli_error($connect));
        }

        mysqli_stmt_close($stmt);
        mysqli_close($connect);
    }
?>

  