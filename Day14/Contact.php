<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="bootstrap.css">
        <title>Contact Page</title>
    </head>
    <body>
      <?php
       include 'nav.html'
      ?>
       
       <form action="formhander.php" method="post">
          <div class="container mt-5">
            <div class="row justify-content-center">
              <div class="col-md-6">
                <h2>Contact Us</h2>
                <form >
                  
                  <div class="mb-3">
                    <label>First Name</label>
                    <input type="text" class="form-control" placeholder="Enter your First name"
                    name="firstName">

                    <div class="mb-3">
                    <label>Second Name</label>
                    <input type="text" class="form-control" placeholder="Enter your Second name"
                    name="secondName">

                  <div class="mb-3">
                    <label>Email</label>
                    <input type="text" class="form-control" placeholder="Enter your Email"
                    name="email">

                    <div class="mb-3">
                    <label>Course</label>
                    <input type="text" class="form-control" placeholder="Enter your Course"
                    name="course">

                    <div class="mb-3">
                    <label>Telephone Number</label>
                    <input type="text" class="form-control" placeholder="Enter your telephoneNumber"
                    name="telephoneNumber">
                  <button type="submit" onclick="func1()" class="btn btn-info">submit</button>
           </div>
    </body>
    </form>
        <?php
        include 'footer.php'
        ?>
</html>