<!DOCTYPE html>
<html>
    <head>
        <title>Hobbies Page</title>
        <link rel="stylesheet" href="hobbies.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    </head>

    <body>
     <div class="container-fluid">
       <div class="row">
         <?php
           include 'nav.html';
         ?>
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
     </div>
   </body>
</html>
