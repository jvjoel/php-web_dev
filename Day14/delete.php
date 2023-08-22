<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <title>Document</title>
</head>
<body>
<?php

    require_once "dbconnection.php";
    if(isset($_GET["id"]) && is_numeric($_GET['id'])) {
        $id = $_GET['id'];
        $query ="DELETE FROM booking WHERE id=?";
        $stmt = mysqli_prepare($connect, $query);
        mysqli_stmt_bind_param($stmt, "i", $id);

        if (mysqli_stmt_execute($stmt)) {
            mysqli_stmt_close($stmt);
            mysqli_close($connect);
            header("Location:recive.php");
            exit();
        }  
        
        else {
            die ("delete query failed.");
        }

    }
?>
</body>
</html>

