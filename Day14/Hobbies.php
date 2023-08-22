<!DOCTYPE html>
<html>
    <head>
        <title>Hobbies Page</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="bootstrap.css">
        <style>
          header {
          font-family: Arial, sans-serif;
          background-color: #0f0f0f;
          color: white;
          text-align:center;
          }
          
          .hobby {
          margin-bottom: 20px;
          padding: 20px;
          background-color: white;
          box-shadow: 0px 0px 5px rgb(0, 0, 0, 0.3);
          }

          </style>
    </head>

    <body>
     <div class="container-fluid">
       <div class="row">
         <?php
           include 'nav.html';
         ?>
       </div>
      </div>
     

      <div class="row">
        <div class="col-lg-6">
          <div class="hobby">
            <h2>Nike<h2>
            <P>One of the mot popular portwear brands in the world</p>
          </div>
          <div class="hobby">
            <h2>Adids<h2>
            <P>Another hugely popular sportswer brand,Adidas, is know for its quality shoes</p>
          </div>
          <div class="hobby">
            <h2>Vans<h2>
            <P>Vans is another globally recognized shoe brand know foe itss supreme quality footwear</p>
          </div>
          <div class="hobby">
            <h2>Puma<h2>
            <P>Puma had net revenue of $6.81billion ass of 2021, making it stand fourth</p>
          </div>
        </div>
        <div class="col-lg-6">
          <?php
          include 'hob.php'
          ?>
          <div class="hobby">
            <h2>Sketchers<h2>
            <P>Sketchers had net revenue of $6.28 billion, and it has secured the fifth spot on our list</p>
          </div>
      </div>

     <?php
       include "footer.php"
     ?>
   </body>
</html>
