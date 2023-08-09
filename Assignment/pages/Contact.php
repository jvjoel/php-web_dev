<!DOCTYPE html>
  <html>
     <!-- Header Row -->
    <head>
      <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
      <title>Contact Page</title>
    </head>

    <body>
      <div class="container-fluid">
       <div class="row" style="border: 5px solid red;">
        <?php
         include "nav.html";
        ?>
     </div>
             
     <!-- Body row -->
     <div class="row" style="border: 5px solid green;">
        <div class="col-lg-4">
         <div class="container mt- 5">
           <div class="row">
             <h2>Contact Us</h2>

              <form action="formhander.php" method="post">
                  <div class="mb-3">
                    <label>First Name</label>
                    <input type="text" class="form-control" placeholder="Enter your First name"
                    name="firstName">
                  </div> 

                <div class="mb-3">
                  <label>Second Name</label>
                  <input type="text" class="form-control" placeholder="Enter your Second Name" 
                    name="secondName">
                </div>

                <div class="mb-3">
                    <label>Email</label>
                    <input type="text" class="form-control" placeholder="Enter your Email"
                    name="email">
                  </div>

                  <div class="mb-3">
                    <label>Course</label>
                    <input type="text" class="form-control" placeholder="Enter your Course"
                    name="course">
                  </div>
                  

        <div class="mb-3">
          <label>Telephone</label>
          <input type="text" class="form-control" placeholder="Enter your Phone"
          name="telephone">
        </div>
        <button type="submit"  class="btn btn-info">submit</button>
      </form>


      <div class="col-lg-4" style="border: 5px solid red;">
        <img src="16729.jpg" height="100%" width="100%">
      </div>

      <div class="col-lg-4" style="border: 5px solid red;">
        <img src="16729.jpg" height="100%" width="100%">
      </div>
        
        </div>
        <!-- Footer row -->
        <div class="row" style="border:4px solid blue">
          <footer class="bg-dark text-light py-3">
            <div class="container text-center">
              <p>&copy;2023 My Website. All rights reserved Freecopy right</p>
            </div>
        </footer>
      </div> 
   </body>
  </html>
