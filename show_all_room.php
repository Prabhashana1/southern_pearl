<?php
include_once 'admin/class.user.php';
$user = new User();


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hotel Booking</title>

    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">

    <style>
        .well {
            background: rgba(0, 0, 0, 0.7);
            border: none;
            height: 200px;
        }

        body {
            background-image: url('images/scuba diving.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        h4 {
            color: #ffbb2b;
        }

        h6 {
            color: navajowhite;
            font-family: monospace;
        }
    </style>


</head>

<body>
    <div class="container">






        <?php

        $sql = "SELECT * FROM rooms WHERE book='true'";
        $result = mysqli_query($user->db, $sql);
        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                // Show Room Category
                while ($row = mysqli_fetch_array($result)) {

                    echo "
                            <div class='row'>
                            <div class='col-md-2'></div>
                            <div class='col-md-6 well'>
                                <h4>" . $row['room_cat'] . "</h4><hr>
                                <h6>Checkin: " . $row['checkin'] . " and checkout: " . $row['checkout'] . "</h6>
                                <h6>Email: " . $row['email'] . "</h6>
                                <h6>Phone: " . $row['phone'] . "</h6>
                                <h6>Booking Condition: " . $row['book'] . "</h6>
                            </div>
                            &nbsp;&nbsp;
                            <a href='edit_all_room.php?id=" . $row['room_id'] . "'><button class='btn btn-primary button'>Edit</button></a>
                            </div>
                            
                    
                    
                         ";
                }
            } else {
                echo "NO Data Exist";
            }
        } else {
            echo "Cannot connect to server" . $result;
        }


        ?>


    </div>

</body>

</html>