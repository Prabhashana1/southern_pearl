<?php
include_once 'class.user.php';
$user = new User();
if (isset($_REQUEST['submit'])) {
    extract($_REQUEST);
    $register = $user->reg_user($uname, $upass, $uemail);
    if ($register) {
        echo "
<script type='text/javascript'>
    alert('Your Manager has been Added Successfully');
</script>";
        echo "
<script type='text/javascript'>
    window.location.href = '../admin.php';
</script>";
    } else {
        echo "
<script type='text/javascript'>
    alert('Registration failed! username or email already exists');
</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Panel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script language="javascript" type="text/javascript">
        function submitreg() {
            var form = document.reg;
            if (form.uname.value == "") {
                alert("Enter username.");
                return false;
            } else if (form.upass.value == "") {
                alert("Enter Password.");
                return false;
            } else if (form.uemail.value == "") {
                alert("Enter email.");
                return false;
            }
        }
    </script>

    <style>
        body {
            background-color: #f4f4f4;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            
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

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        .form-control {
            width: 100%;
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
            <h2>Add Your Manager</h2>
            <hr>
            <form action="" method="post" name="reg">
                <div class="form-group">
                    <label for="uname">User Name:</label>
                    <input type="text" class="form-control" name="uname" placeholder="exmple: Sumudu1@" required>
                </div>
                <div class="form-group">
                    <label for="uemail">Email:</label>
                    <input type="email" class="form-control" name="uemail" placeholder="example: sumudu.p@gmail.com" required>
                </div>
                <div class="form-group">
                    <label for="upass">Password</label>
                    <input type="text" class="form-control" name="upass" placeholder="Sumudu@2000.@" required>
                </div>
                <button type="submit" class="btn btn-lg btn-primary button" name="submit" value="Add Manager" onclick="return(submitreg());">Submit</button>

                <br>
                <div id="click_here">
                    <a href="../admin.php">Back to Admin Panel</a>
                </div>


            </form>
        </div>
    </div>

</body>

</html>