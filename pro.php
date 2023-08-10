<?php
    $servername="localhost";
    $username="root";
    $password="";
    $db="tudwdf";
    
    $conn=mysqli_connect($servername,$username,$password,$db);
    if(!$conn)
    {
        die("error connection" . mysqli_connect_error());
    }
    else
    {
        echo "Connection established" ;
    }

?>