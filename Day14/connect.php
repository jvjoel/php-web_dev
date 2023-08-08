<?php 


    $query = "INSERT INTO registration (firstName, secondName, email, telephone, course) VALUES (?, ?, ?, ?, ?)";


    $stmt = mysqli_prepare($connect, $query);


    mysqli_stmt_bind_param($stmt, "sssss", $firstName, $secondName, $email, $course, $telephone);

    // Set the variables
    $firstName = $_POST["firstName"];
    $secondName = $_POST["secondName"];
    $email = $_POST["email"];
    $course = $_POST["course"];
    $telephone = $_POST["telephone"];

    // Execute the prepared statement
    mysqli_stmt_execute($stmt);

    // Close the statement and the connection
    mysqli_stmt_close($stmt);
    mysqli_close($connect);

?>
