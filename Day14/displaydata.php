<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>display data</title>
</head>
<body>

    <div class="container-fluid">

      <div class="row style bloder 5px white">  
         <?php
             include "nav.html";
         ?>
      </div>


      <div class="row">
         <div class="col-lg-4">
          <img src="y.PNG" width="100%" height="100%">
     </div>
         
      <div class="col-lg-4" style="border;">
           <table class="table table-border table-striped">
                <thead class="thead-light">
                  <tr>
                        <th>First Name</th>
                        <th>Second Name</th>
                        <th>Email</th>
                        <th>Course</th>
                        <th>Telephone Number</th>
                       <th>Action</th>
                   </tr>
                </thead>
                <tbody>
                   <?php
                       require_once "dbconnect.php";
                        $query ="SELECT * FROM registration";
                        $result = mysqli_query($connect, $query);
                        if (mysqli_num_rows($result)>0){
                        while ($data = mysqli_fetch_assoc($result)) {
                        echo '<tr>';
                        echo '<td>' .$data['firstName'] . '</td>'; 
                        echo '<td>' .$data['secondName'] . '</td>'; 
                        echo '<td>' .$data['email'] . '</td>'; 
                        echo '<td>' .$data['course'] . '</td>';
                        echo '<td>' .$data['telephoneNumber'] . '</td>';


                        echo '<td>'. '<a href="update.php?id=' .$data['id'] .'"
                        class="btn btn-sm btn">Edit</a>'. '<a href="process_delete.php?id=' .$data['id'] .'"
                        class="btn btn-sm btn"onclick="return confirm(\'Are sure you want to delete this record?\')">
                        Delete</a>' .'<br />' .'</td>'; 
                        echo '</tr>';

                       }
                                
                      }
                    ?>
               </tbody>
           </table>
        </div>
   </div>
</body>
   <?php
   include 'footer.php'
   ?>
</html>

