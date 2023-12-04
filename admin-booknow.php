<?php
include_once 'admin/class.user.php';
$user = new User();

$roomname = $_GET['roomname'];

if (isset($_REQUEST['submit'])) {
  extract($_REQUEST);
  $result = $user->booknow($checkin, $checkout, $name, $phone, $roomname);
  if ($result) {
    echo "<script type='text/javascript'>
                  alert('" . $result . "');
             </script>";
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

  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <link rel="stylesheet" href="style.css">
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
    .container {
      max-width: 400px;
      /* Adjust the max-width as needed */
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      border-radius: 5px;
      margin-top: 50px;
      /* Adjust the top margin as needed */
      margin-bottom: 50px;
    }

    h2 {
      text-align: center;
    }

    .wells {
      padding: 20px;
    }

    .form-groups {
      margin-bottom: 15px;
    }

    label {
      display: block;
      margin-bottom: 5px;
      font-size: 1.5rem;
    }

    .datepicker {
      width: 90%;
      padding: 8px;
      box-sizing: border-box;
      margin-bottom: 10px;
      border: solid;
      border-width: 1px;

    }

    .form-control {
      width: 90%;
      padding: 8px;
      box-sizing: border-box;
      margin-bottom: 10px;
      border: solid;
      border-width: 1px;
    }

    button {
      padding: 10px 20px;
      background-color: #3498db;
      color: #fff;
      border: none;
      border-radius: 3px;
      cursor: pointer;
    }

    button:hover {
      background-color: #2980b9;
    }

    #click_here {
      margin-top: 10px;
      text-align: center;
    }

    #click_here a {
      color: #3498db;
      font-size: 2rem;
      text-decoration: none;
    }

    #click_here a:hover {
      text-decoration: underline;
    }
  </style>


</head>

<body>


  <div class="container">


    <div class="wells">
      <h2>Book Now: <?php echo $roomname; ?></h2>
      <hr>
      <form action="" method="post" name="room_category">


        <div class="form-groups">
          <label for="checkin">Check In :</label>&nbsp;&nbsp;&nbsp;
          <input type="text" class="datepicker" name="checkin">

        </div>

        <div class="form-group">
          <label for="checkout">Check Out:</label>&nbsp;
          <input type="text" class="datepicker" name="checkout">
        </div>
        <div class="form-group">
          <label for="name">Enter Your Full Name:</label>
          <input type="text" class="form-control" name="name" placeholder="Enter your full name here" required>
        </div>
        <div class="form-group">
          <label for="phone">Enter Your Phone Number:</label>
          <input type="text" class="form-control" name="phone" placeholder="077#######" required>
        </div>


        <button type="submit" class="btn btn-lg btn-primary button" name="submit">Book Now</button>

        <br>
        <div id="click_here">
          <a href="admin.php">Back</a>
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