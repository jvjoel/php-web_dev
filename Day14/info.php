<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap.css">
    <title>Booking</title>
</head>
<body>
    <?php
    include 'nav.html'
    ?>
    <form action="booking.php" method="post">
        <div class="row">
            <div class="col-lg-6">  
            <div class="mb-3">
                <label>Title</label>
                <input type="text" class="form-control" placeholder="Enter your event_title"
                name="event_title">
            </div>

            <div class="mb-3">
                <label>Location</label>
                <input type="text" class="form-control" placeholder="Enter your event_location"
                name="event_location">
            </div> 

            <div class="mb-3">
                <label>Description</label>
                <input type="text" class="form-control" placeholder="Enter your Description"
                name="event_description">
            </div>
            <button type="submit" class="btn btn-info">Booking</button>

            <div class="conatiner">
                <div class="row-lg-4">
                  <img src="donald.jpg" width="80%", height="100%">
                </div>
            </div>
        </div>
    </form>
    <div class="col-md-6">
        <?php
        include 'prices.php'
        ?>

    </div>
</body>
</html>