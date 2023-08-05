<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "cw1";

//creating databse connection
$con = mysqli_connect($host, $username, $password, $database);

//check databse connection
if(!$con)
{
    die("Connection Failed: ". mysqli_connect_error());
}
else{
    echo"Connected Successfully";
}
?>