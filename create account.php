<?php
include_once('Connector.php');
$error = false;
$success = false;
if(@$_POST['signup']){
    if(!$_POST['email']){
        $error .= '<p>Email is required!</p>';
    }
    if(!$_POST['pass']){
        $error .= '<p>Password is required!</p>';
    }
    $query = $dbh->prepare("INSERT INTO Users (idUsers, Email, Password) VALUES (:id, :email, :password)");
        $result = $query->execute(
            array(
                'id' => NULL,
                'email' => $_POST['email'],
                'password' => $_POST['pass']
            )
        );
    if($result) {
        $success = "User, " . $_POST['email'] . " was successfully created";
    } else{
        $success = "There was an error creating the account!";
    }
}

?>
<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="styleSheet.css">
<body style="background-color: ghostwhite">
<ul>
    <li><a href="Index.php">Home</a></li>
    <li><a href="product.php">Products</a></li>
    <li><a href="about.php">About</a></li>
    <head>
    <div id="createaccount" style="text-align: center">
        <form name="account" method="POST">

        <h1 style="text-align: center">Create Account</h1>
            <p>Email</p>
        <input type="text" id="email" name="email" required>

        <p>Password</p>
            <input type="password" id="password" name="pass" required>
        <br>
        <button type="submit" name="signup" value="1">Create Account</button>
        </form>
        <br>
        <?php
        if($error){
            echo $error;
        }
        if($success){
            echo $success;
        }
        ?>
        <br>
    </div>
        <div style="text-align: center"><a href="sign%20in.php">Already have an account click here</a>
        </div>
    </head>
    <footer><p>Copyright 2016</p><a href="#" id="email1">My"hidden"email@gmail.com</a></footer>
</body>
</html>