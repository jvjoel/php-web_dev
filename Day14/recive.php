<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
   require_once "dbconnect.php";
   $query ="SELECT * FROM registration";
   $result = mysqli_query($connect, $query);
   while ($data = mysqli_fetch_assoc($result)) {
    echo "The telephoneNumber is" . $data['telephoneNumber'] . '<a href="process_update.php?id=' .$data['id'] .'"
    class="btn btn-sm btn">Edit</a>'. "|". '<a href="#?id=' .$data['id'] .'"
    class="btn btn-sm btn"onclick="return confirm(\'Are sure you want to delete this record?\')">
    <on class=" fas fa-trash-alt>Delete</a>' .'<br />';
   }
?>
</body>
</html>

