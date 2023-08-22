<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>display data</title>
    <style>
    td {
      background-color:blue;
    }

    .delete {
      color:red;
    }
    </style>
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
            <section id="team">
            <h2>Bookings</h2>
            <ul> 
              <li>
                <img src="capture.jpeg" alt="Member 1" width="30%" height="30%">
                <h3>Joel</h3>
                <p>Co-Founder</p>
              </li>
            </ul>
            <ul> 
              <li>
                <img src="shoe.webp" alt="Member 1" width="30%" height="30%">
                <h3>Joel</h3>
                <p>Co-Founder</p>
              </li>
            </ul>
        </div>

        <div class="col-lg-4">
            <section id="team">
            <h2>Bookings</h2>
            <ul> 
              <li>
                <img src="me.jpeg" alt="Member 1" width="30%" height="30%">
                <h3>Joel</h3>
                <p>Co-Founder</p>
              </li>
            </ul>
            <ul> 
              <li>
                <img src="1000.webp" alt="Member 1" width="30%" height="30%">
                <h3>Joel</h3>
                <p>Co-Founder</p>
              </li>
            </ul>
        </div>

         <div class="col-lg-4" style="border;">
            <table class="table table-border table-striped">
               <thead class="thead-light">
                  <tr>
                     <th>Title</th>
                     <th>Location</th>
                     <th>Description</th>
                     <th>Action</th>
                  </tr>
               </thead>
               <tbody>
                  <?php
                     require_once "dbconnection.php";
                     $query ="SELECT * FROM booking";
                     $result = mysqli_query($connect, $query);
                     if (mysqli_num_rows($result)>0){
                     while ($data = mysqli_fetch_assoc($result)) {
                     echo '<tr>';
                     echo '<td>' .$data['event_title'] . '</td>'; 
                     echo '<td>' .$data['event_location'] . '</td>'; 
                     echo '<td>' .$data['event_description'] . '</td>'; 


                     echo '<td>'. '<a href="recive.php?id=' .$data['id'] .'"
                     class="btn btn-sm btn">Edit</a>'. '<a href="delete.php?id=' .$data['id'] .'"
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
   </div>
</body>
   <?php
   include 'footer.php'
   ?>
</html>

