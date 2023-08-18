<?php 
    if ($_SERVER["REQUEST_METHOD"] =="POST") {
    $fName = $_POST["firstName"];
    $sName = $_POST["secondName"];
    $email = $_POST["email"];
    $course = $_POST["course"];
    $telephoneNumber = $_POST["telephoneNumber"];


        require_once 'dbconnect.php';
        $query = "INSERT INTO registration (firstName, secondName, email, course, telephoneNumber) VALUES (?, ?, ?, ?, ?)";


        $stmt = mysqli_prepare($connect, $query);
        if (!$stmt) {
            die("Perpare failed: " . mysqli_error($connect));
        }

        mysqli_stmt_bind_param($stmt, "sssss", $fName, $sName, $email, $course, $telephoneNumber);
        $fName = $_POST["firstName"];
        $sName = $_POST["secondName"];
        $email = $_POST["email"];
        $course = $_POST["course"];
        $telephoneNumber = $_POST["telephoneNumber"];
        if (mysqli_stmt_execute($stmt)) {
            header("Location: Contact.php");
        }
        
        else {
          die("Execute failed: " . mysqli_error($connect));
        }
        
       mysqli_smt_close($stmt);
       mysqli_close($connect);
       
    }
    ?> 

  
       
  
 
  