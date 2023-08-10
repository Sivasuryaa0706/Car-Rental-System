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

$email = $_POST["email"];
$password = $_POST["pass"];

$count = 0;

$sql = "SELECT * FROM user_details";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0)
{
    while($row = mysqli_fetch_assoc($result))
    {
        if($row["email"] == $email && $row["password"] == $password)
        {
            $a = $row["id"];
            $b = $row['firstname'];
            $c = $row['lastname'];
            $d = $row['email'];
            $e = $row['password'];

            $sql1 = "SELECT * FROM profile";
            $results = mysqli_query($conn,$sql1);
            if(mysqli_num_rows($results) == 0)
            {

            $sql2 = "INSERT INTO profile (id,firstname,lastname,email,password) VALUES ('$a','$b','$c','$d','$e')";
            if (mysqli_query($conn,$sql2))
            {

            }
            $count = 1;
            include "home1.html";
            break;
            }
            else
            {
                $count = 2;
            }

        }
    }
}

if($count == 2)
{
    echo "<h1>Already User Logged in</h1> <a href=\"profile.php\">Click here to goto Profile page>></a>";
   
}
elseif($count == 0)
{
    echo "<h1>Login Failed</h1> <a href=\"home1.html\">Click here to goto Homepage>></a>";
   
}
mysqli_close($conn);


?>