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
   $query ="SELECT * from registration";
   $result = mysqli_query($connect, $query);
   while ($data = mysqli_fetch_assoc($result)) {
    echo "This my course" . $data['course'] . '<a href="updata.php?id=' .$data['id'] .'"
    class="btn btn-sm btn">Edit</a>'. '<br />';
   }
?>
</body>
</html>

