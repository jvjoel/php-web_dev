<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        $id = $_GET['id'];
      
      require_once "dbconnect.php";
      $query ="SELECT * FROM registration WHERE id=?";
      $stmt = mysqli_prepare($connect, $query);
      mysqli_stmt_bind_param($stmt, "i", $id);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      $data = mysqli_fetch_assoc($result)
    ?>

    
    <form action="process_update.php" method="post">

     <input type="hidden" name="id" value="<?php echo $data["id"]; ?>">

      <div class="form-group mb-3">
       <label>First Name</label>
        <input type="text" class="form-control" placeholder="Enter your First name"
        name="firstName" value="<?php echo $data['firstName']; ?>">
      </div> 

      <div class="form-group mb-3">
        <label>Second Name</label>
        <input type="text" class="form-control" placeholder="Enter your Second Name" 
        name="secondName" value="<?php echo $data['secondName']; ?>">
      </div>

      <div class="form-group mb-3">
        <label>Email</label>
        <input type="text" class="form-control" placeholder="Enter your Email"
       name="email" value="<?php echo $data['email']; ?>">
      </div>

      <div class="form-group mb-3">
       <label>Course</label>
       <input type="text" class="form-control" placeholder="Enter your Course"
        name="course" value="<?php echo $data['course']; ?>">
      </div>
        
     <div class="form-group mb-3">
        <label>telephone</label>
        <input type="text" class="form-control" placeholder="Enter your Course"
        name="telephone" value="<?php echo $data['telephone']; ?>">
      </div>

      <button type="submit" class="btn btn-info">submit</button>
    </from>
    <?php
      }
    ?>
</body>
</html>