<!DOCTYPE html>
<html>
    <head>
        <title>Hobbies Page</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
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
     
     <header>
       <h1>Hobbie for life</h1>
      </header>
     <div class="hobby">
       <h2>Photography<h2>
       <P>Capture the essence of the lens</p>
      </div>
      <div class="hobby">
       <h2>Swimming<h2>
       <P>Follow the wave and become one</p>
      </div>
      <div class="hobby">
        <h2>Swimming<h2>
        <P>Cultivate your own oasis of tranquility</p>
     </div>

     <?php
       include "footer.php"
     ?>
   </body>
</html>
