<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
</head>
<body>
    <form action="booking.php" method="post">

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
    </form>

    <table classs="table_striped">
        <thead class="thead-drak">
            <tr>
                <th>Title</th>
                <th>Location</th>
                <th>Dessscription</th>
          </tr>
        </thead>
</body>
</html>