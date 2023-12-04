<?php
include_once 'admin/class.user.php';
$user = new User();

$id = $_GET['id'];

$sql = "SELECT * FROM rooms WHERE room_id='$id'";
$query = mysqli_query($user->db, $sql);
$row = mysqli_fetch_array($query);


if (isset($_REQUEST['submit'])) {
    extract($_REQUEST);
    $result = $user->edit_all_room($checkin, $checkout, $name, $phone, $id);
    if ($result) {
        echo "<script type='text/javascript'>
              alert('" . $result . "');
         </script>";
    }
}
?>


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Hotel Booking</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script>
        $(function() {
            $(".datepicker").datepicker({
                dateFormat: 'yy-mm-dd'
            });
        });
    </script>

    <style>
        body {
            background-color: #f4f4f4;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            margin-top: 50px;
        }

        .well {
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 5px;
            max-width: 400px;
            width: 100%;
            margin: auto;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        hr {
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            color: #333;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .button {
            width: 100%;
            margin-top: 15px;
            background-color: #007bff;
            color: #ffffff;
            border: 1px solid #007bff;
            border-radius: 3px;
            padding: 10px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #0056b3;
        }

        #click_here {
            margin-top: 15px;
            text-align: center;
        }

        #click_here a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }

        #click_here a:hover {
            color: #555;
        }
    </style>


</head>

<body>
    <div class="container">

        <div class="well">
            <h2>EDIT</h2>
            <h2><?php echo  $row['room_cat'] ?></h2>
            <hr>
            <form action="" method="post" name="room_category">


                <div class="form-group">
                    <label for="checkin">Check In :</label>&nbsp;&nbsp;&nbsp;
                    <input type="text" class="datepicker" name="checkin" value="<?php echo $row['checkin'] ?>">

                </div>

                <div class="form-group">
                    <label for="checkout">Check Out:</label>&nbsp;
                    <input type="text" class="datepicker" name="checkout" value="<?php echo $row['checkout'] ?>">
                </div>
                <div class="form-group">
                    <label for="name">Enter Your Email:</label>
                    <input type="text" class="form-control" name="name" value="<?php echo $row['email'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="phone">Enter Your Phone Number:</label>
                    <input type="text" class="form-control" name="phone" value="<?php echo $row['phone'] ?>" required>
                </div>


                <button type="submit" class="btn btn-lg btn-primary button" name="submit">Update</button>

                <br>
                <div id="click_here">
                    <a href="admin.php">Back to Admin Panel</a>
                </div>


            </form>
        </div>





    </div>











    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</body>

</html>