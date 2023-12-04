<?php
include_once 'admin/class.user.php';
$user = new User();



if (isset($_REQUEST['submit'])) {
    extract($_REQUEST);
    $result = $user->check_available($checkin, $checkout);
    if (!($result)) {
        echo $result;
    }
}





?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Hotel Booking</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="style.css">
    <script>
        $(function() {
            $(".datepicker").datepicker({
                dateFormat: 'yy-mm-dd'
            });
        });
    </script>


    <style>
        .well {
            background: #D9EDF8;
            border: none;
            height: 260px;
        }


        h4 {
            font-size: 4rem;
            color: #003049;
            margin-bottom: 1rem;
            margin-left: 20px;
        }

        h6 {
            font-size: 2rem;
            color: #0F8482;
            font-family: monospace;
            margin-top: 1rem;
            margin-left: 20px;
        }

        .btn {
            margin-top: 4px;
            margin-bottom: 20px;
        }

        label {
            color: black;
            font-size: 15px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .form-container {
            position: absolute;
            top: 30%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        form {
            width: 50%;
        }

        .form-group {
            margin-bottom: 10px;
        }

        .datepicker {
            width: 100%;
        }
    </style>


</head>

<body>

    <?php include('header.php'); ?>
    <div class="container">

        <div class='row'>
            <div class='col-md-4'></div>
            <div class='col-md-5 well'>
                <div class="form-container">
                    <form action="" method="post" name="room_category">


                        <div class="form-group">
                            <label for="checkin">Check In :</label>&nbsp;&nbsp;&nbsp;
                            <input type="text" class="datepicker" name="checkin">

                        </div>

                        <div class="form-group">
                            <label for="checkout">Check Out:</label>&nbsp;&nbsp;
                            <input type="text" class="datepicker" name="checkout">
                        </div>

                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <button type="submit" class="btn btn-primary button" name="submit">Check Availability</button>

                    </form>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
        <?php

        if (isset($_REQUEST['submit'])) {
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {

                    $room_cat = $row['room_cat'];
                    $sql = "SELECT * FROM room_category WHERE roomname='$room_cat'";
                    $query = mysqli_query($user->db, $sql);
                    $row2 = mysqli_fetch_array($query);

                    echo "
                            <div class='row'>
                            <div class='col-md-4'></div>
                            <div class='col-md-5 well'>
                                <h4>" . $row2['roomname'] . "</h4><hr>
                                <h6>No of Beds: " . $row2['no_bed'] . " " . $row2['bedtype'] . " bed.</h6>
                                <h6>Available Rooms: " . $row2['available'] . "</h6>
                                <h6>Facilities: " . $row2['facility'] . "</h6>
                                <h6>Price: " . $row2['price'] . " LKR/night.</h6>
                            </div>
                            <div class='col-md-3'>
                                <a href='./booknow.php?roomname=" . $row2['roomname'] . "'><button class='btn btn-primary button'>Book Now</button></a>
                            </div>   
                            </div>
                            
                            
                        
                    
                         ";
                }
            }
        }


        ?>


    </div>








    <?php include('footer.php'); ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="./js/script.js"></script>
</body>

</html>