<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat&family=Ubuntu&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <br><br>
    <center><h1>USER PROFILE</h1></center>
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
        echo "<table cellpadding=20 cellspacing=10><tr><td>Firstname</td><td>" . $row["firstname"] . "</td></tr>
            <tr><td>Lastname</td><td>" . $row["lastname"] . "</td></tr>
            <tr><td>ID</td><td>" . $row["id"] . "</td></tr>
            <tr><td>E-mail id</td><td>" . $row["email"] . "</td></tr></table>" .
            "<form action=\"logout.php\">
            <input type=\"submit\" class=\"btnn\" value = \"logout\">";
    }
}
else
{
  echo "<form action=\"login.html\">
  <input type=\"submit\" class=\"btnn\" value = \"Goto to login\">";
  
}
mysqli_close($conn);    
    ?> 
  
    <style>
      body{
        text-align:center;
        height:100vh;
        color: #fff;
        font-size: 1.3rem;
        font-family: ubuntu,sans-serif;
        overflow: hidden;
        /* background-color: #321764; */
        background: linear-gradient(#321764, #39ca74);
      }
      h1{
        font-family: Montserrat,sans-serif;
        text-decoration: underline;
      }
      table{
        text-align:left;
        display:flex;
        justify-content: center;
        line-height: 2rem;
      }
      input{
        text-align: center;
      }
      .btnn {
  background-color: #c94138;
  color: #ffffff;
  font-weight: 600;
  font-size: 1.1rem;
  border-radius: 70px;
  text-align: center;
  width: 290px;
  padding : 5px;
  width : 150px;

  font-family: "Montserrat", sans-serif;
}

    </style>
  </body>
</html>
