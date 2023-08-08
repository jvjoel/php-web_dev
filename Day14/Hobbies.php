<!DOCTYPE html>
<html>
    <head>
        <title>Hobbies Page</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    </head>

    <body>
     <div class="container-fluid">
       <div class="row" style="border:4px solid green;">
         <?php
           include 'nav.html';
         ?>
       </div>
     </div>
     <div class="row" style="border: 4px solid black;">
       <div class="col-lg-4">
         <h1>My Hobbies</h1>
         <table>
           <tr>
             <th>Hobbies</th>
           </tr>
           <tr>
             <td>Sports</td>
           </tr>
           <tr>
             <td>Swimming</td>
           </tr>
         </table>
       </div>

       <div class="col-lg-4" style="border: 4px solid red;">
         <img src="16729.jpg" width="100%" height="100%">
       </div>

       <div class="col-lg-4" style="border:4px solid blue;">
         <img src="1124787.jpg" width="100%" height="100%">
       </div>
     </div>

     <div class="row" style="border:4px solid yellow;">
       <footer class="bg-dark text-light">
         <div class="container text-align">
           <p>&copy;2023 My Website. All right reserved Freecopy</p>
         </div>
       </footer>
     </div>
   </body>
</html>
