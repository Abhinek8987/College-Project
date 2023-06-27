<?php
session_start();
if(!isset($_SESSION["username"]))
{
    header("location:login.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <style>
        .container{
            font-family: 'Pacifico', cursive;
        }
        .logo{
            margin-top: 20px;
        }
        body{
            background-color:antiquewhite;
        }
        .Logout{
            font-size: 30px;
        }
    </style>
</head>
<body>
    <center>
        <img class="logo" src="https://th.bing.com/th?id=OIP.IHUPBfUI8eKCOZ9Oxrt82gHaHa&w=250&h=250&c=8&rs=1&qlt=90&o=6&dpr=1.3&pid=3.1&rm=2" width="92" height="80">
    </center>
    <img src="2.jpg" width="114px" height="129px">
   

<h1><i>USer Login</i>
        <br>
      <div class="container">
        Welcome to Abhinek Pandey in this Portal</h1><?php echo $_SESSION["username"] ?>
      </div>  
<br>

    <a class="Logout" href="Logout.php">Logout</a>
    
</body>
</html>