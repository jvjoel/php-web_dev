<?php 
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $db = 'users';
    $connect = mysqli_connect($host, $user, $password, $db);

    if (!$connect) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $query = "INSERT INTO registration (firstName, secondName, email, course, telephone) VALUES (?, ?, ?, ?, ?)";


    $stmt = mysqli_prepare($connect, $query);
    if (!$stmt) {
        die ("Perpared failed: " . mysqli_error($connect));
    }


    mysqli_stmt_bind_param($stmt, "sssss", $fName, $sName, $e, $cs, $tele);


    $fName = $_POST["firstName"];
    $sName = $_POST["secondName"];
    $e = $_POST["email"];
    $cs = $_POST["course"];
    $tele = $_POST["telephone"];
   
    if (mysqli_stmt_execute($stmt)) {
        header("Location: ../Contact.php");
    }

    alse {
        die("Perpared failed:" . mysqli_error($connect));
    }

    mysqli_stmt_execute($stmt);


    mysqli_stmt_close($stmt);
    mysqli_close($connect);

?>
