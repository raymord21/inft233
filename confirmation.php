<head>
    <title>Confirmation Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Bookason</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="http://www.inft.me/~reymord/index.php">Home</a></li>
                <li><a href="about.php">About us</a></li>
                <li><a href="products.php">Products</a></li> 
                <li><a href="checkout.php">Checkout</a></li> 
            </ul>
        </div>
    </nav>
    Welcome ! <?php echo $_POST [" email"]; ?><br>
    Your Password is <?php echo $_POST [" password"]; ?>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>