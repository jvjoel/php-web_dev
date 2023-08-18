<!DOCTYPE html>
<html>
    <head>
        </style>
        <title>Profile Page</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <style>
            head {
                padding: 15px;
                margin-top: 20px;

            }

            h1 {
                text-align: center;
                color: rgb(0, 0, 0);
                background-color: brown;              
            }

            body {
                justify-content: baseline;
            }

            tr {
                text-align: center;
                color: blue;
                align-items: center;
            }
        </style>
    </head>
    <body>
      <div class="container-fluid">
       <div class="row" style="border: 5px solid brown;">
       <?php
           include 'nav.html';
          ?>
        </div>
      </div>

     <div class="row" style="border: 4px solid blue;">
       <div class="col-lg-4">
         <h1>My Profile</h1>
         <table class="table">
           <tr>
             <th>School</th> 
             <th>Year</th>
             <th>Awards</th>
           </tr>

           <tbody>
             <tr>
              <td>St.Marys Highschool</td>
               <td>2021</td>
               <td>PLE</td>
             </tr>

             <tr>
               <td>Kings wayhighschool</td>
               <td>2019</td>
               <td>UEC</td>
             </tr>
           </tbody>
         </table>
       </div>
       
       <div class="col-lg-4" style="border: 4px solid yellow;">
         <img src="1124787.jpg" width="100%" height="100%">
       </div>

       <div class="col-lg-4" style="border: 4px solid black;">
         <img src="16729.jpg" width="100%" height="100%">
       </div>
     </div>

   </body>
 </html>