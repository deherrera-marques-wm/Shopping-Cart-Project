<?php
$hn = "localhost";
$pass = "root";
$name = "root";

try{
    $dbh = new PDO("mysql:host=$hn;dbname=mysql", $name, $pass);
    //echo 'we did it! :D';
}
catch(PDOException $you){
    echo $you->getMessage();
}
?>