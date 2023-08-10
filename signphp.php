<?php

$servername = "localhost";
$username = "root";
$password ="";
$db = "project";

$conn = mysqli_connect($servername,$username,$password,$db);

if(!$conn)
{
    echo "not connected";
}
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$password = $_POST["pass"];

$sql = "INSERT INTO user_details (firstname,lastname,email,password) VALUES ('$fname','$lname','$email','$password')";
if(mysqli_query($conn,$sql))
{
}
mysqli_close($conn);
include "login.html";

?>