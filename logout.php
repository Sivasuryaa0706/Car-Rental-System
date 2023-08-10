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

    
$sql = "SELECT * FROM profile";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) == 1)
{
    while($row = mysqli_fetch_assoc($result))
    {
       $a = $row["id"];
       $sql2 = "DELETE FROM profile WHERE id = $a ";
       if(mysqli_query($conn,$sql2))
        {
            include "home1.html";
        }
        mysqli_close($conn);  
    }
}
else
    include "home1.html";

    
    ?>