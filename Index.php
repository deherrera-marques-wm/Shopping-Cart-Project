<?php
    require('Connector.php');
?>

<!DOCTYPE html>
<title>N3rds-R-Us</title>
<h1 id="name">N3rds-R-Us</h1>
<link rel="stylesheet" type="text/css" href="styleSheet.css">
<body style="background-color: ghostwhite">
<ul>
    <li><a class="active" href="index.php">Home</a></li>
    <li><a href="product.php">Products</a></li>
    <li><a href="about.php">About</a></li>
    <ul style="float:right;list-style-type:none;">
        <li><a href="create%20account.php">Create Account</a></li>
        <li><?php echo $_SESSION['email']; ?></li>
    </ul>
</ul>

<div id="pro">
    <h1 style="text-align:center;">Featured Products</h1>
    <a href="product.php">
        <img border="0" src="http://www.technocrazed.com/wp-content/uploads/2013/08/Crazy-Computer-Mouse-Designs-1.jpg"/>
        <img border="0" src="http://g04.a.alicdn.com/kf/HTB1D3PRHFXXXXbUaXXXq6xXFXXXQ/Blue-Orange-EACH-G2000-Over-ear-Game-Gaming-font-b-Headphone-b-font-Headset-Earphone-Headband.jpg"/>
        <img border="0" src="http://randommization.com/wp-content/uploads/2011/10/Steampunk-Xbox-360-Controller.jpg"/>
    </a>
</div>
<footer><p>Copyright 2016</p><a href="#" id="email1">My"hidden"email@gmail.com</a></footer>
</body>
</html>
