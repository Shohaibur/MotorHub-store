<?php

session_start(); 

if(!isset($_SESSION["email"])) 
{

header("location: ../View/CLogin.php"); 

}

?>

<!DOCTYPE html>
<head>
<title> Customer Profile </title>
<link rel="stylesheet" type="text/css" href="../CSS/MyStyle.css">
</head>
<h1 id="heading" align="center"> MotorHub Store </h1>
<hr>
<br>
<br>
<h2 id="subheading" align="center"> Welcome To Your Profile </h2>
<body align="center">
<h4 align ="center"> 

<a href="../View/CIndex.php">Home Page</a>
<br>
<br>

<a href="CUpdate.php">Update Profile</a>
<br>
<br>

<!-- <a href="CService.php">View MotorHub Services</a> -->
<!-- <br>
<br> -->

<a href="CComplain.php">Add Complain</a>
<br>
<br>
  
<!-- <a href="CProduct.php">Order Products</a> -->
</h4>
<h5 align ="center">
<br>
<br> 
<a href="../Control/CLogout.php">Log Out</a>   
</h5>
</hr> 
</body>
</html>