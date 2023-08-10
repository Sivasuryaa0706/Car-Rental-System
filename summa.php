<?php
    $servername="localhost";
    $username="root";
    $password="";

    $conn=mysqli_connect($servername,$username,$password);

    if(!$conn)
    {
        echo " no Connection established" ;
    }

    $sql = "CREATE DATABASE data";

    if(mysqli_query($conn,$sql))
    {
        echo "Database created";
    }

    mysqli_close($conn);

    ?>