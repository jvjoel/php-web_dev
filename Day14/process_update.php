<?php
 if ($_SERVER["REQUEST_METHOD"] =="POST") {
    $id = $_POST["id"];
    $fName = $_POST["firstName"];
    $sName = $_POST["secondName"];
    $email = $_POST["email"];
    $course = $_POST["course"];
    $telephone = $_POST["telephone"];

    try {
        require_once "dbconnect.php";
        $query = "UPDATE registration SET firstName = ?, secondName =?, email =?, course=?, telephone =? WHERE id =?";

        $stmt = mysqli_prepare($connect, $query);
        mysqli_stmt_bind_param($stmt, "sssssi", $fName, $sName, $email, $course, $telephone, $id);
        mysqli_stmt_execute($stmt);

        echo "submit successfull";

    } catch (Exception $e) {
        //throw $th;
    }
 }
?>