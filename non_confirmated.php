<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="styles.css">
        <title>Register Again</title>
    </head>
    <body>
        <?php
        $firstnameErr = $lastnameErr = $emailErr = $CustusernameErr = $CustpasswordErr = "";
        $firstname = $lastname = $Custusername = $email = $Custpassword = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["firstname"])) {
                $firstnameErr = "First Name is required";
            } else {
                $firstname = test_input($_POST["firstname"]);
                // check if name only contains letters and whitespace
                if (!preg_match("/^[a-zA-Z ]*$/", $firstname)) {
                    $firstnameErr = "Only letters and white space allowed";
                }
            }

            if (empty($_POST["lastname"])) {
                $lastnameErr = "Last Name is required";
            } else {
                $lastname = test_input($_POST["lastname"]);
                // check if name only contains letters and whitespace
                if (!preg_match("/^[a-zA-Z ]*$/", $lastname)) {
                    $lastnameErr = "Only letters and white space allowed";
                }
            }

            if (empty($_POST["Custusername"])) {
                $CustusernameErr = "Name is required";
            } else {
                $Custusername = test_input($_POST["Custusername"]);
                // check if name only contains letters and whitespace
                if (!preg_match("/^[a-z ]*$/", $Custusername)) {
                    $CustusernameErr = "Only letters and white space allowed";
                }
            }

            if (empty($_POST["email"])) {
                $emailErr = "Email is required";
            } else {
                $email = test_input($_POST["email"]);
                // check if e-mail address is well-formed
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    header('Location: non_confirmated.php');
                    $emailErr = "Invalid email format";
                    
                }
            }


            if (empty($_POST["Custpassword"])) {
                $CustpasswordErr = "Password is required";
            } else {
                $Custpassword = test_input($_POST["Custpassword"]);
                // check if name only contains letters and whitespace
                if (!preg_match("/^[a-zA-Z1-9 ]*$/", $Custpassword)) {
                    $CustpasswordErr = "Capital Letters are rquired";
                }
            }
        }

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        ?>

        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">WebSiteName</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="http://www.inft.me/~reymord/index.php">Home</a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="http://www.inft.me/~reymord/signin.php">Sign In</a></li> 
                    <li><a href="http://www.inft.me/~reymord/registration.php">Register</a></li> 
                </ul>
            </div>
        </nav>
        <form role="form" class="col-sm-12" style="height: 300px;width:400px;" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <div class="form-group">
                <label for="name">First Name</label>
                <input type="text" class="form-control"  name="firstname">
                
            </div>
            <div class="form-group">
                <label for="name">Last Name</label>
                <input type="text" class="form-control"  name="lastname" required="">
      
            </div>
            <div class="form-group">
                <label for="name">Username</label>
                <input type="text" class="form-control"  name="Custusername">
                <span class="error colsm-6" style="color:#FF0000;">* <?php echo $CustusernameErr; ?></span>
            </div>
            <div class="form-group">
                <label for="email">Email address:</label>
                <input type="text" class="form-control"  name="email" >
                <span class="error" style="color:#FF0000;">* <?php echo $emailErr; ?></span>
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control"  name="Custpassword" >
                <span class="error" style="color:#FF0000;">* <?php echo $CustpasswordErr; ?></span>
            </div>
            <div class="col-sm-12">
                <input class="button b-success" type="submit" value="submit">
            </div>
        </form>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </body>
</html>