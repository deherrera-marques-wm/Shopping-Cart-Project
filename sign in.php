<?php
    include_once('Connector.php');

    if(@$_POST['login']) {
        $query = $dbh->prepare("SELECT * FROM Users WHERE Email = :email AND Password = :pass");
        $result = $query->execute(
            array(
                'email' => $_POST['email'],
                'password' => $_POST['pass']
            )
        );
        $userinfo = $query->fetch();
        ​
        if ($userinfo) {
            ​
            $success = "User, " . $_POST['email'] . " was successfully logged in.";

            header("Location: profile.php");
        }

        else {
            $success = "There was an error logging into the account.";
        }
    }
?>

<link rel="stylesheet" type="text/css" href="styleSheet.css">
<body style="background-color: ghostwhite">
<ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="product.php">Products</a></li>
    <li><a href="about.php">About</a></li>
</ul>
<div id="signin" style="text-align: center">
    <form id="login" method="post">
        <p>Email</p>
        <input type="text" id="email" name="email" required>

        <p>Password</p>
        <input type="password" id="password" name="pass" required>
        <br>

        <button type="submit" name="login" value="1">Sign In</button>
    </form>
</div>
</div>
<div style="text-align: center"><a href="create%20account.php">Don't have an account make one</a>
</div>
</body>