<?php
session_start();

    if (isset($_GET['item1'])) {
        $_SESSION['checkout']++;
            $_SESSION['total'] += 10;
        header("location: product.php");
    }

    if (isset($_GET['item2'])) {
    $_SESSION['checkout']++;
        $_SESSION['total'] += 10;
    header("location: product.php");
    }

    if(isset($_GET['item3'])) {
    $_SESSION['checkout']++;
        $_SESSION['total'] += 150;
    header("location: product.php");
    }

    if(isset($_GET['item4'])) {
    $_SESSION['checkout']++;
        $_SESSION['total'] += 250;
    header("location: product.php");
    }

    if(isset($_GET['item5'])) {
    $_SESSION['checkout']++;
        $_SESSION['total'] += 125;
    header("location: product.php");
    }

    if(isset($_GET['item6'])) {
    $_SESSION['checkout']++;
        $_SESSION['total'] += 50;
    header("location: product.php");
    }

    if(isset($_GET['item7'])) {
    $_SESSION['checkout']++;
        $_SESSION['total'] += 450;
    header("location: product.php");
    }

    if(isset($_GET['item8'])) {
    $_SESSION['checkout']++;
        $_SESSION['total'] += 25;
    header("location: product.php");
    }

    if(isset($_GET['item9'])) {
    $_SESSION['checkout']++;
        $_SESSION['total'] += 10;
    header("location: product.php");
    }

if(isset($_GET['del'])) {
    $_SESSION['checkout'] = 0;
    $_SESSION['total'] = 0;
}
?>
<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="styleSheet.css">
<title>Products</title>
<h1 id="name">N3rds-R-Us</h1>
<body style="background-color: ghostwhite">
<ul>
    <li><a href="index.php">Home</a></li>
    <li><a class="active" href="product.php">Products</a></li>
    <li><a href="about.php">About</a></li>
    <ul style="float:right;list-style-type:none;">
        <li><a href="#">Items: <?php
                echo $_SESSION['checkout']?></a></li>
        <li><a href="#">Total:$ <?php
                echo $_SESSION['total']?></a></li>
        <li><a href="create%20account.php">Create Account</a></li>
        </ul>
</ul>
<h1>Products</h1>
<hr>
<img src="http://www.technocrazed.com/wp-content/uploads/2013/08/Crazy-Computer-Mouse-Designs-1.jpg"/>
<p>$10</p>
<br>
<a href="product.php?item1=true" class="myButton">Add to Cart</a> <a href="product.php?del=true" class="myButton">Empty all items</a>
<br>
<img src="http://www.alux.com/wp-content/uploads/2014/09/Most-Expensive-Computer-Mice-Top-10-1.-The-Gold-Bullion-Wireless-Mouse-36.835.jpg"/>
<p>$10</p>
<br>
<a href="product.php?item2=true" class="myButton">Add to Cart</a> <a href="product.php?del=true" class="myButton">Empty all items</a>
<br>
<img src="https://cdn0.vox-cdn.com/thumbor/aHRhyXdY_etJFhCVSy3tZ8_G5EQ=/cdn0.vox-cdn.com/uploads/chorus_asset/file/3916796/alienware-15.0.png"/>
<p>$150</p>
<br>
<a href="product.php?item3=true" class="myButton">Add to Cart</a> <a href="product.php?del=true" class="myButton">Empty all items</a>
<br>


<img src="http://10mostthings.com/wp-content/uploads/2014/05/Razer-DeathStalker-Ultimate-Gaming-Keyboard-700x325.jpg"/>
<p>$250</p>
<br>
<a href="product.php?item4=true" class="myButton">Add to Cart</a> <a href="product.php?del=true" class="myButton">Empty all items</a>
<br>
<img src="http://g04.a.alicdn.com/kf/HTB1D3PRHFXXXXbUaXXXq6xXFXXXQ/Blue-Orange-EACH-G2000-Over-ear-Game-Gaming-font-b-Headphone-b-font-Headset-Earphone-Headband.jpg"/>
<p>$125</p>
<br>
<a href="product.php?item5=true" class="myButton">Add to Cart</a> <a href="product.php?del=true" class="myButton">Empty all items</a>
<br>
<img src="https://s-media-cache-ak0.pinimg.com/564x/d4/eb/ff/d4ebffc28c110094879337bf7781c9d2.jpg"/>
<p>$50</p>
<br>
<a href="product.php?item6=true" class="myButton">Add to Cart</a> <a href="product.php?del=true" class="myButton">Empty all items</a>
<br>


<img src="http://ecx.images-amazon.com/images/I/61K38-2o56L._SL1000_.jpg"/>
<p>$450</p>
<br>
<a href="product.php?item7=true" class="myButton">Add to Cart</a> <a href="product.php?del=true" class="myButton">Empty all items</a>
<br>
<img src="http://randommization.com/wp-content/uploads/2011/10/Steampunk-Xbox-360-Controller.jpg"/>
<p>$25</p>
<br>
<a href="product.php?item8=true" class="myButton">Add to Cart</a> <a href="product.php?del=true" class="myButton">Empty all items</a>
<br>
<img src="http://g02.a.alicdn.com/kf/HTB1CMX_KFXXXXciXFXXq6xXFXXXs/Somic-p1-earphones-mobile-phone-computer-flat-general-earphones-7-1-font-b-Gaming-b-font.jpg"/>
<p>$10</p>
<br>
<a href="product.php?item9=true" class="myButton">Add to Cart</a> <a href="product.php?del=true" class="myButton">Empty all items</a>
<footer><p>Copyright 2016</p><a href="#" id="email1">My"hidden"email@gmail.com</a></footer>
</body>
</html>
