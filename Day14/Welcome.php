<!DOCTYPE html>
<html>
  <head>
    <title>Cover page</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="welcome.css"> 
    
  </head>

 <body>
    <div class="container-fluid">
      <div class="row" style="border:4px solid;">
        <?php
         include 'nav.html';
        ?>
      </div>
    </div>
      
    <div class="cover">
      <h1>Welcome<h1>
      <P>Shop at the Lowest Price<p>
      <p class="lead">
        <a href="subscription.php" class="btn btn-lg btn-light fw-bold border-white bg-white">Subscription<a>
     </p>
    </div>

    <?php 
     include "footer.php"
    ?>
  </body>
</html>