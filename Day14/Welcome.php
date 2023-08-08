<!DOCTYPE html>
  <html>
    <!-- Header Row -->
    <head>
       <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
       <title>Welcome page</title>
    </head>

    <body>
     
      <div class="container-fluid">
      <div class="row" style="border: 4px solid green;">
        <?php
          include 'nav.html';
        ?>
      </div>

      <div class="row" style="border: 2px solid blue;">
        <div class="col-lg-6">
         <div class="container mt-5">
            <div class="row justify-content-left">
              
              <form action="#" method="post">
                    <div class="alert alert-success" role="alert">
                      <div class="alert alert-infro">
                        <p>This is the welcome page</p>
                        <input type="text" placeholder="Enter Username" name="username">  
                        <input type="text" placeholder="Enter password" name="password">
                        <input type="submit" value="submit">
                      </div>
                    </div>
                </form>
            </div>
          </div>
        </div>

        <div class="col-lg-3" style="border: 2px solid yellow;">
          <h3> My image</h3>
           <img src="16729.jpg" height="100%" width="150%">
        </div>

        <div class="col-lg-3" style="border: 2px solid green;">
          <h3>Image 2</h3>
          <img src="16729.jpg" height="100%" width="150%">
        </div>

      </div>
     <!-- Footer -->
     <div class="row" style="border:4px solid yellow">
      <footer class="bg-dark text-light py-3">
       <div class="container text-center">
          <p>&copy;2023 My Website. All rights reserved Freecopy right</p>
       </div>
      </footer>
    </div>
  </body>
 </html>

