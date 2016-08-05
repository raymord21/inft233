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
        <title>Registration Page</title>
    </head>
    <body>

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
        <form role="form" class="col-sm-12" style="height: 300px;width:400px;" action="confirmation.php" method="post">
            <div class="form-group">
                <label for="name">First Name</label>
                <input type="text" class="form-control"  name="firstname">
            </div>
            <div class="form-group">
                <label for="name">Last Name</label>
                <input type="text" class="form-control"  name="lastname">
            </div>
            <div class="form-group">
                <label for="name">Username</label>
                <input type="text" class="form-control"  name="Custusername">
            </div>
            <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" class="form-control"  name="email">
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control"  name="Custpassword">
            </div>
            <div class="col-sm-12">
                <input class="button b-success" type="submit" value="submit">
            </div>
        </form>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </body>
</html>
