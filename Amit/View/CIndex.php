<?php

session_start();

if(!isset($_SESSION["email"])) 
{
   header("Location: ../View/CLogin.php");
}

?>

<!DOCTYPE html>
<head>
<title> Home Page </title>
<link rel="stylesheet" type="text/css" href="../CSS/MyStyle.css">
</head>
<h1 id="heading" align="center"> MotorHub Store </h1>
<hr>
<body align="center">
<br>
<br>
<h1 id="subheading" align="center"> Welcome To MotorHub Store </h1>

<h3 align="center">
   <a href="CProfile.php"> My Profile </a>
</h3>
<h3 align="center">
   <a href="../Control/CLogout.php"> LogOut </a>
</h3>
</hr>
</body>
</html>