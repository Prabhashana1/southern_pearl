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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="style.css">
    <title>Rooms</title>


    <style>
        .well {
            background: #D9EDF8;
            border: none;
            height: 200px;
        }

        body {
            background-image: url('images/home_bg.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
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
    </style>


</head>

<body>

    <?php include('header.php'); ?>
    <div class="container">




        <?php

        $sql = "SELECT * FROM room_category";
        $result = mysqli_query($user->db, $sql);
        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                // Show Room Category
                while ($row = mysqli_fetch_array($result)) {

                    echo "
                            <div class='row'>
                            <div class='col-md-3'></div>
                            <div class='col-md-6 well'>
                                <h4>" . $row['roomname'] . "</h4><hr>
                                <h6>No of Beds: " . $row['no_bed'] . " " . $row['bedtype'] . " bed.</h6>
                                <h6>Facilities: " . $row['facility'] . "</h6>
                                <h6>Price: " . $row['price'] . "/= LKR/night.</h6>
                            </div>
                            <div class='col-md-3'>
                                <a href='./booknow.php?roomname=" . $row['roomname'] . "'><button class='btn btn-primary button'>Book Now</button> </a>
                            </div>   
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








    <?php include('footer.php'); ?>

 <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="./js/script.js"></script>
</body>

</html>