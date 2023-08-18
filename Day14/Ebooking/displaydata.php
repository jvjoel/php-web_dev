<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <title>display data</title>
</head>
<body>

    <div class="container-fluid">

      <div class="row style= bloder 5px white">  
         <?php
             include "../nav.html";
         ?>
      </div>

       <tbody>
            <div class="row" style="border:4px solid green;">
               <div class="col-lg-4" style="border: 4px solid red;">
                 <img src="../1124787.jpg" width="100%" height="100%">
               </div>

               <div class="col-lg-4" style="border: 4px solid black;">
                 <img src="../16729.jpg" width="100%" height="100%">
               </div>
          </div>
          <?php
             include "../footer.php";
          ?>

               <div class="col-lg-4" style="border: 4px solid red;">
                   <table style="table table-border table-striped">
                   <thead class="thead-light">
                      <tr>
                         <th>Title</th>
                         <th>Location</th>
                         <th>Descripation</th>
                         <th>Action</th>
                    </tr>
                   </thead>
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


                                    echo '<td>'. '<a href="../update.php?id=' .$data['id'] .'"
                                    class="btn btn-sm btn">Edit</a>'. '<a href="process_delete.php?id=' .$data['id'] .'"
                                    class="btn btn-sm btn"onclick="return confirm(\'Are sure you want to delete this record?\')">
                                    Delete</a>' .'<br />' .'</td>'; 
                                echo '</tr>';

                        }
                        
                        }
                    ?>
                </div>
       </tbody>
    </div>
</body>
</html>

