<?php
$host="localhost";
$user="root";
$password="";
$db="user";

session_start();

$data=mysqli_connect($host,$user,$password,$db);
if($data===false)
{
    die("connection error");
}
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $username=$_POST["username"];
    $password=$_POST["password"];

    $sql="select * from login where username='".$username."' AND password='".$password."'";

    $result=mysqli_query($data,$sql);

    $row=mysqli_fetch_array($result);

    if($row["usertype"]=="user")
    {
        $_SESSION["username"]=$username;
        header("location:userhome.php");
    }

    elseif($row["usertype"]=="admin")
    {
        $_SESSION["username"]=$username;
        header("location:adminhome.php");
    }
    else
    {
        echo "username or password incorrect";

    }
}
?>













<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        /* body{
            background-image:url('https://th.bing.com/th/id/OIP.xbEuLsajLa-MN8EsU3_sLQHaEL?w=285&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background: radial-gradient(circle, rgba(210,39,201,1) 45%, rgba(148,187,233,1) 100%);
            background-color: aqua;
        } */
        .username{
            font-size: 20px;
        }
        .password{
            font-size:20px;
        }
        
        ul li{
            display: inline;
            cursor: pointer;
            font-size: 20px;
            margin: 10px;
        }
        ul li:hover{
            background-color: green;
        }
        .submit{
            font-size: 20px;
            cursor: pointer;
            border-width: 10px;
            /* background-color: green; */
            /* border-radius: 1px solid green; */
        }
        .nature{

            margin-top:0px;
                position:absolute;
                width:100%;
                z-index: -1;
                opacity:0.9;
        }
    </style>
</head>
<body>
    <img class="nature" src="https://th.bing.com/th/id/R.10d1d528994fe26b2b0d20af7222005f?rik=UOcgMqv8xj2D5A&riu=http%3a%2f%2fwallpapercave.com%2fwp%2fwc1786837.jpg&ehk=FK7fJJWmRz8yTDvnDkNFPIEYeJQZT7m8xJ1mkS06aT0%3d&risl=&pid=ImgRaw&r=0" height="679px">
    <center>
        <ul>
            <a href="home.php"><li>Home</li></a>
            <li>About</li>
            <li>Contact</li>
           
        </ul>
        <h1>Staff Login</h1>
        <br>
        <div style=" background: radial-gradient(circle, rgba(210,39,205,1) 45%, rgba(148,187,233,1) 100%); width:400px">
            <br><br>
            <form action="#" method="POST">
        

        
    <div>
        <label>username</label>
        <input class="username" type="text" name="username" size="15" required>
    </div>
    <br><br>
    <div>
        <label>password</label>
        <input class="password" type="password" name="password" size="15" required>
    </div>
    <br><br>
    <div>
        <!-- <button>Logi</button> -->
        
        <input class="submit" type="submit" value="Login" >
    </div>
</form>
    <br><br>
 </div>
</center>
</body>
</html>