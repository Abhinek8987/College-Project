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
    <title>Admin Login</title>
    <style>
        .IA{
            font-size: 30px;
        }
        body{
            background-color: cyan;
            background-image: url('https://upload.wikimedia.org/wikipedia/commons/d/d9/SVCE.png');
            background-repeat: no-repeat;
            /* background-repeat:repeat-y; */
            background-position: center;
            background-size: 400px;
        }
         .Logout{
            font-size: 30px;
        }
    </style>
</head>
<body>
    <img src="1.jpeg.jpg" width="92px" height="80px">
    
    <h1>ADMIN Login
        <br>
        Welcome to Dr. Srinivasa Rao K</h1><?php echo $_SESSION["username"] ?>
<br>
<a class="IA" href="IA.html">IA Entry</a>
    <a class="Logout"href="Logout.php">Logout</a>
</body>
</html>