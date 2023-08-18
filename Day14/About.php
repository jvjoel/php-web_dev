<DOCTYPE html>
 <html>
    <head>
     <title>About page</title>
     <link rel="stylesheet" href="about.css">
     <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
     <style>
      
      section {
        text-align:center;
        background-color:blue;
      }

      section ul {
        margin:2px;
        padding-bottom: 10px;
        
      }

      body {
        background-color:black;
        display:flex;
      }
     </style>
    </head>

   <body>
     <div class="container-fluid">
       <div class="row" style="border: 4px solid;">
          <?php
           include 'nav.html';
          ?>
       </div>
     </div>

     <div class="row">
        <div class="col-lg-6">
            <section id="team">
            <h2>Our team</h2>
            <ul> 
              <li>
                <img src="1124787.jpg" alt="Member 1" width="30%" height="30%">
                  <h3>Joel</h3>
                  <p>Co-Founder</p>
                </li>
              <li>
                <img src="6156.PNG" alt="Manger"width="30%" height="30%">
                <h3>Bob</h3>
                <p>Director</p>
              </li>
          </ul>
        </div>


        <div class="col-lg-6">
            <section id="team">
            <h2>Our team</h2>
            <ul> 
              <li>
                <img src="t.JPG" alt="Member 1" width="30%" height="30%">
                  <h3>Joel</h3>
                  <p>Co-Founder</p>
                </li>
              <li>
                <img src="16729.jpg" alt="Manger"width="30%" height="30%">
                <h3>Bob</h3>
                <p>Director</p>
              </li>
          </ul>
        </div>
     </div>

     <div class="row" style="border: 4px solid;">
      <?php
        include "footer.php"
      ?>
    </div>
   </body>
 </html>

