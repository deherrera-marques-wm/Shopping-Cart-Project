<html>
<link rel="stylesheet" type="text/css" href="styleSheet.css">
<head>
<body style="background-color: ghostwhite">
<ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="product.php">Products</a></li>
    <li><a href="about.php">About</a></li>
</ul>
<div id="signin" style="text-align: center">
    <form id="login" method="POST" action="login.php">
        <p>Email</p>
        <input type="text" id="email" name="email" required>

        <p>Password</p>
        <input type="password" id="password" name="pass" required>
        <br>

        <button type="submit" name="signup" value="1">Sign In</button>
    </form>
</div>
</head>
<div style="text-align: center"><a href="create%20account.php">Don't have an account make one</a>
</div>
</body>

</html>
