<!DOCTYPE html>
<html>
  <!-- Header Row -->
   <head>
      <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
      <title>Home Page</title>
      <style>
        .container-hobby {
        margin-bottom: 10px;
        padding: 10px;
        background-color: black;
        box-shadow: 0px 0px 5px rgb(0, 0, 0, 0.3);
       }

        .hobby h5 {
          color:#333;
          padding-bottom: 30px;
          border-bottom: 80px solid #333;
        }
          
        .hobby p{
          color: #666;
        }
        </style>
    </head>
    <body>
      <div class="container-fluid">
       <div class="row" style="border: 5px solid;">
          <?php
            include 'nav.html';
          ?>
       </div>
     </div>

     <div class="row" style="border: 5px solid;">
      <div class="col-lg-6">
      <?php
       include 'siders.php';
      ?>      
       </div>

     <div class="col-lg-6">
     <div class="hobby">
        <div class="container">
          <div type="text" class="btn btn-center">
            <h5>Welcome to Kings.com<h5>
            <P>For more information you can cantact us on the Contect page using the email and Phonenumber</p>   <br><p>Come and get at the lowest price<p> OR call our serive line also aviable on the contact page</br>
            <p>Only at Kings<p>
          </div>          
       </div>
      </div>
      </div>

      <?php
       include "footer.php"
      ?>
   </body>
</html>
