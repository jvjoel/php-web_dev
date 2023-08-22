<!DOCTYPE html>
<html>
  <head>
    <title>Cover page</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="welcome.css">
    <style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    margin: 0;
    padding: 0;
    }
    
    .cover {
    position: relative;
    text-align: center;
    padding: 100px 0;
    background-image: url(hermes.jpg);
    width: 100%;
    height: 597px;
    background-size: cover;
    background-position: center;
    color: white;
    }
    
    .cover h1 {
    margin-top: 10px;
    padding: 5px;
    color: black;
    font-size: 46px;
    margin-bottom: 20px;
    }
    
    .cover p{
    margin-top: 3px;
    color: black;
    font-size: 18px;
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
      
    <div class="cover">
      <h1>Welcome<h1>
      <P>Shop at the Lowest Price<p>
      <p class="lead">
        <a href="subscription.php" class="btn btn-lg btn-light fw-bold border-white bg-white">Subscription<a>
     </p>
    </div>
  </body>
  <?php 
    include "footer.php"
  ?>
</html>