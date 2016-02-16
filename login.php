<?php
session_start();
if(isset($_SESSION['userName'])!="")
{
    header("Location: Account.php");
}

include_once('Connector.php');

$error = false;
$success = false;

if(@$_POST['signup']) {

    if(!$_POST['user']){
        $error .= '<p>Username is a required field!</p>';
    }

    if(!$_POST['pass']){
        $error .= '<p>Password is a required field!</p>';
    }

    $query = $dbh->prepare("SELECT * FROM Users WHERE Email = :email AND Password = :password");
    $result = $query->execute(
        array(
            'email' => $_POST['email'],
            'password' => $_POST['pass']
        )
    );
    if ($result) {
        $success = "User, " . $_POST['email'] . " was successfully logged in.";
        header("Location: Index.php");
        $_SESSION['email'] = $_POST['email'];
    } else {
        $success = "There was an error logging into the account.";
    }
}
?>

