<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
            <tbody>
                <?php
                require_once "dbconnection.php";
                $query ="SELECT * FROM booking";
                $result = mysqli_query($connect, $query);
                while ($data = mysqli_fetch_assoc($result)) {
                    echo '<tr>';
                    echo '<td>' .$data['event_title'] . '</td>'; 
                    echo '<td>' .$data['event_location'] . '</td>'; 
                    echo '<td>' .$data['event_description'] . '</td>'; 

                echo "The decription for the event is" . $data['event_description'] . '<a href="delete.php?id=' .$data['id'] .'"
                class="btn btn-sm btn">Edit</a>'. "|". '<a href="delete.php?id=' .$data['id'] .'"
                class="btn btn-sm btn"onclick="return confirm(\'Are sure you want to delete this record?\')">
                <on class=" fas fa-trash-alt>Delete</a>' .'<br />';
                }
                ?>
            </tbody>
        </table>

</body>
</html>

