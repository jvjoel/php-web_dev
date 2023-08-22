<DOCTYPE html>
 <html>
    <head>
     <title>About page</title>
     <link rel="stylesheet" href="about.css">
     <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
     <link rel="stylesheet" href="bootstrap.css">
     <style>
      
      section {
        text-align:center;
        background-color:white;
        padding: 0 10px;
        margin: right 0px; ;
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
              <img src="junior.jpg" alt="Manger"width="30%" height="30%">
              <h3>Nike Air</h3>
              <p>Jordan 1</p>
            </li>
            <li>
              <img src="donald.jpg" alt="Member 1" width="30%" height="30%">
              <h3>Nike Air</h3>
             <p>Force 1</p>
            </li>
            <li>
             <img src="hermes.jpg" alt="Manger"width="30%" height="30%">
             <h3>Nike Air</h3>
             <p>Director</p>
           </li>
          </ul>
        </div>

        <div class="col-lg-6">
          <section id="team">
          <h2>Our team</h2>
          <ul> 
            <li>
              <img src="junior.jpg" alt="Manger"width="30%" height="30%">
              <h3>Nike Air</h3>
              <p>Jordan 1</p>
            </li>
            <li>
              <img src="donald.jpg" alt="Member 1" width="30%" height="30%">
              <h3>Nike Air</h3>
              <p>Force 1</p>
            </li>
            <li>
              <img src="hermes.jpg" alt="Manger"width="30%" height="30%">
              <h3>Nike Air</h3>
              <p>Director</p>
            </li>
          </ul>
        </div>
     </div>
   </body>
      <?php
        include "footer.php"
      ?>
    
 </html>

